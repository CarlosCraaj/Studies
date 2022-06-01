<?php 
namespace App\models;
use Config\Db;

class Model 
{
    static public function all()
    {
        $obj = new static;
        $conn = Db::conexao();
        $select = "select * from {$obj->table}";
        $ret = $conn->query($select);
        $compras = $ret->fetchAll();

        return $compras;
    }

    static public function find(int $id)
    {
        $obj = new static;
        $conn = Db::conexao();
        $select = "select * from {$obj->table} where {$obj->primary_key}=:id LIMIT 1";
        $stmt = $conn->prepare($select);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $objAux = $stmt->fetch(\PDO::FETCH_OBJ);
        foreach ($objAux as $key => $value) {
            $obj->{$key} = $value;
        }
        return $obj;
    }

    public function save()
    {
        $atributos = get_object_vars($this);
        unset($atributos['table']);
        unset($atributos['primary_key']);

        if(isset($this->{$this->primary_key})){
            //atualizar o registro
            $coluna = "";
            $aux = true;
            unset($atributos[$this->primary_key]);

            foreach ($atributos as $key => $value) {
                if ($aux) {
                    $aux = false;
                    $coluna .= "`$key` = :$key";
                }else {
                    $coluna .= ", `$key` = :$key";
                }
            }
            $update = "UPDATE `{$this->table}` SET {$coluna} WHERE `{$this->primary_key}`=:id;";

            $conn = DB::conexao();
            $stmt = $conn->prepare($update);
            foreach ($atributos as $key => $value) {
                $stmt->bindValue(':'.$key,$value);
            }
            $stmt->bindValue(':id',$this->{$this->primary_key});
            $stmt->execute();
            return $this;
        }

        $col = "(";
        $val = "(";
        $aux = true;
        foreach ($atributos as $key => $value) {
            if ($aux) {
                $aux = false;
                $col .= "`$key`";
                $val .= ":$key";
            }else {
                $col .= ",`$key`";
                $val .= ",:$key";
            }
        }
        $col .= ")";
        $val .= ")";

        $insert = "insert into {$this->table} {$col} values {$val}";
        $conn = Db::conexao();
        $stmt = $conn->prepare($insert);
        foreach ($atributos as $key => $value) {
            $stmt->bindValue(':'.$key,$value);
            // $stmt->bindParam(':'.$key,$atributos[$key]);
        }

        $stmt->execute();
        return $this::find($conn->lastInsertId());

    }
}