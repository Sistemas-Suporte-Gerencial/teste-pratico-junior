<?php 
    session_start();

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

    <!-- SCRIPTS -->
  <script src="./js/validaCep.js"></script>
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
  
<div class="container mt-5 text-center">
  <div class="row text-center">
    <div class="col-6">
      <h3>Empresas</h3>
      <form action="criarEmpresa.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="nome-fantasia" class="form-label">Nome fantasia:</label>
            <input type="text" class="form-control" id="nome-fantasia" placeholder="Nome Fantasia" name="nome_fantasia">
        </div>
        <div class="mb-3 mt-3">
            <label for="cnpj" class="form-label">CNPJ:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj">
        </div>
        <div class="mb-3 mt-3">
            <label for="data-fundacao" class="form-label">Data de Fundação:</label>
            <input type="date" class="form-control" id="data-fundacao" placeholder="Data de Fundação" name="data_fundacao">
        </div>
        <div class="mb-3 mt-3">
            <label for="email_comercial" class="form-label">Email Comercial:</label>
            <input type="text" class="form-control" id="email_comercial" placeholder="Email Comercial" name="email_comercial">
        </div>
        <div class="mb-3 mt-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="telefone">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" onchange="validaCep()" placeholder="CEP: " name="cep">
        </div>

        <div class="mb-3 mt-3">
            <label for="logradouro" class="form-label">Logradouro:</label>
            <input type="text" class="form-control" id="logradouro" placeholder="logradouro" name="logradouro">
        </div>
        <div class="mb-3 mt-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
        </div>
        <div class="mb-3 mt-3">
            <label for="Estado" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="Estado" placeholder="Estado" name="estado">
        </div>
        <button type="submit" class="btn btn-primary mb-5">Criar Empresa</button>
    </div>
  
    <div class="col-6 mt-5">
        <div class="card text-center">
            <div class="card-body"><a href="listarEmpresas"></a> Empresas</div>
            <hr>
            <?php 
                require_once('listarEmpresas.php');
                Listar::ListarEmpresas();
            ?>
        </div>
    </div>
  </div>
  
</div>
        

</body>
</html>