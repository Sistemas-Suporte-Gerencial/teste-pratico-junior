<?php 

class Conexao {
    private static $instance;

    public static function getConn() {

        if(!isset(self::$instance)) {
            self::$instance = new PDO("pgsql:host=localhost;port=5432;dbname=nome-do-bd;","postgres","coloque-sua-senha");
        }

        return self::$instance;

    }
}

?>