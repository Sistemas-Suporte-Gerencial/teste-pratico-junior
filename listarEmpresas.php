<?php

require_once('./Model/Conexao.php');

class Listar {

    public static function ListarEmpresas() {

        $sql = 'SELECT empresas.nome_fantasia, empresas.cnpj FROM empresas INNER JOIN usuarios ON usuarios.email = empresas.email_usuario';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        
        foreach ($stmt->fetchall(\PDO::FETCH_ASSOC) as $empresa){
            echo '<a href="empresa.php?empresa='.$empresa['cnpj'] . '">'. $empresa['nome_fantasia']. '</a>';
        }
    } 

    public static function Empresa($p) {
        
        $sql = 'SELECT * FROM empresas where cnpj = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p);
        $stmt->execute();
        
        $dados = [];
        foreach ($stmt->fetchall(\PDO::FETCH_ASSOC) as $empresa){
           //print_r($empresa);
           $dados += $empresa;
        };

        session_start();
        $_SESSION['dados'] = $dados;
    }
}



?>