<?php 

require_once('./Model/Conexao.php');

Conexao::getConn();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pswd'];

echo $nome,$email,$senha;

$sql = 'SELECT * FROM usuarios WHERE email = ?';
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $email);
$stmt->execute();

$exist = $stmt->rowCount();

if (!$exist) {
    
    $sql = 'INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $email);
    $stmt->bindValue(3, $senha);

    $stmt->execute();
    session_start();
    $_SESSION['autenticado'] = true;
    $_SESSION['nome'] = $nome;
    header("location: home.php");
} else {
    $_SESSION['usuario_criado'] = "NÃO";
    header("location: index.php?login=erro1");
} 

//echo "<br> PG_query: ".$stmt->rowCount()."<br>";
//print_r($stmt->fetchall(\PDO::FETCH_ASSOC));

?>