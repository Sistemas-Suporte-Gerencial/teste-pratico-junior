<?php 
    
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

<div class="container-fluid p-5 bg-dark text-white text-center">
  <h1>Login</h1>
</div>
  
<div class="container mt-5">
  <div class="row text-center">
    <div class="col-sm-4">
    <form action="valida.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Senha:</label>

            <div class="alert alert-danger" hidden id="alert">
                Digite uma senha que contenha 7 dígitos ou mais.
            </div>
            
            <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd" onchange="validaSenha()" required>
        </div>
        <div class="mb-3 mt-3">
            <?php
                if (isset($_GET['login']) && $_GET['login'] == "erro3") {
            ?>
                <div class="alert alert-danger mt-1">
                    Email ou Senha estão incorretos.
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
    </div>
  </div>
  <div class="col-sm-4">

  </div>
</div>

</body>
</html>