<?php 
require_once('./Model/Conexao.php');

Conexao::getConn();

session_start();

$nome_fantasia  = $_POST['nome_fantasia'];
$cnpj  = $_POST['cnpj'];
$data_fundacao  = $_POST['data_fundacao'];
$email_comercial  = $_POST['email_comercial'];
$telefone  = $_POST['telefone'];
$cep  = $_POST['cep'];
$logradouro  = $_POST['logradouro'];
$cidade  = $_POST['cidade'];
$estado  = $_POST['estado'];
$email_usuario = $_SESSION['email'];

//print_r($_POST);

$sql = 'INSERT INTO empresas (nome_fantasia, 
cnpj, data_fundacao, email_comercial, telefone,
cep, logradouro, cidade, estado, email_usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $nome_fantasia);
    $stmt->bindValue(2, $cnpj);
    $stmt->bindValue(3, $data_fundacao);
    $stmt->bindValue(4, $email_comercial);
    $stmt->bindValue(5, $telefone);
    $stmt->bindValue(6, $cep);
    $stmt->bindValue(7, $logradouro);
    $stmt->bindValue(8, $cidade);
    $stmt->bindValue(9, $estado);
    $stmt->bindValue(10, $email_usuario);

$stmt->execute();

header('home.php');

?>