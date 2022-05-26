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

    public function save()
    {
        $atributos = get_object_vars($this);
        unset($atributos['table']);

        $insert = "insert into compras(`titulo`,`desc`) values (:titulo,:desc)";
        $conn = Db::conexao();
        $stmt = $conn->prepare($insert);
        $stmt->bindParam(':titulo',$atributos['titulo']);
        $stmt->bindParam(':desc',$atributos['desc']);
        $stmt->execute();
        return $conn->lastInsertId();

    }
}