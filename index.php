<?php 
    require_once('./Model/Conexao.php');
    Conexao::getConn();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- SCRIPTS -->
  <script src="./js/validaCampos.js"></script>

</head>
<body>


<div class="container-fluid p-3 bg-dark text-white text-center">
  <h1>Index</h1>
</div>
  
<div class="container mt-5">
  <div class="row ">
    <div class="col-5 text-center">
      <h3>Usuários</h3>
      
      <form action="validaUser.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Senha:</label>

            <div class="alert alert-danger" hidden id="alert">
                Digite uma senha que contenha 7 dígitos ou mais.
            </div>

            <?php
                if (isset($_GET['login']) && $_GET['login'] == "erro1") {
            ?>
                    <div class="alert alert-danger mt-1">
                        <strong>Erro! </strong> Email já cadastrado
                    </div>
            <?php } ?>

            <?php
                if (isset($_GET['login']) && $_GET['login'] == "erro2") {
            ?>
                <div class="alert alert-danger mt-1">
                    Usuário não autenticado.
                </div>
            <?php } ?>

            <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd" onchange="validaSenha()" required>
        </div>
        <a href="./login.php" class="btn btn-secondary mt-2">Entrar como usuário</a><br>
                    ou <br>
        <button type="submit" class="btn btn-success mt-2 mr-2">Cadastrar-se</button>

        </form>

    </div>
    
</form>

    </div>
  </div>
</div>

</body>
</html>