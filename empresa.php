<?php 

require_once('./listarEmpresas.php');
$empresa = $_GET["empresa"];
Listar::Empresa($empresa);

$dados = $_SESSION['dados'];

    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true) {
        header('Location: index.php?login=erro2');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid d-flex ">
    <ul class="navbar-nav justify-content-between">
      <li class="nav-item" >
        <a class="nav-link  disabled" href="#">
            <?php 
                echo $_SESSION['nome'];
            ?>  
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
</nav>

<div class="container">
    <div class="row text-center">
        <div class="col-8">
        <ul class="list-group">
            <li class="list-group-item">Nome: <?php print_r($dados['nome_fantasia']); ?></li>
            <li class="list-group-item">CNPJ: <?php print_r($dados['cnpj']); ?></li>
            <li class="list-group-item">Data Fundação: <?php print_r($dados['data_fundacao']); ?></li>
            <li class="list-group-item">Email Comercial: <?php print_r($dados['email_comercial']); ?></li>
            <li class="list-group-item">Telefone: <?php print_r($dados['telefone']); ?></li>
            <li class="list-group-item">Endereço: <?php print_r($dados['logradouro'])." - ".print_r($dados['cidade'])." - ".print_r($dados['estado'])." - ".print_r($dados['cep']) ?></li>
        </ul>
        </div>
    </div>
</div>


        

</body>
</html>