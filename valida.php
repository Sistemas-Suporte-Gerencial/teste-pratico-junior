<?php

require_once('./Model/Conexao.php');

Conexao::getConn();

$email = $_POST['email'];
$senha = $_POST['pswd'];

$sql = 'SELECT nome FROM usuarios WHERE email = ? and senha = ?';
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $email);
$stmt->bindValue(2, $senha);
$stmt->execute();
$exist = $stmt->rowCount();

foreach ($stmt->fetchall(\PDO::FETCH_ASSOC) as $value) {
    $nome = implode(",", $value);
}

if (!$exist) {
    header("location: login.php?login=erro3");
} else {
    
    session_start();
    $_SESSION['autenticado'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['nome'] = $nome;
    
    //echo print_r($stmt->fetchall(\PDO::FETCH_ASSOC));
    header("location: home.php");
} 

?>