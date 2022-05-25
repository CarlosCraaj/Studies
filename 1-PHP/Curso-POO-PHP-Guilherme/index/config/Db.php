<?php
namespace Config;

class Db
{
    public static function conexao()
    {
        try {
            $conexao = new \PDO("mysql:host=localhost;dbname=phpoo", "root", "Chicobioc@1");
        } catch (\Throwable $th) {
            echo 'Erro ao conectar com o MySQL: ' . $th->getMessage();
        }
        return $conexao;
    }
}