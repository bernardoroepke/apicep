<?php
  session_start();
  $adress = $_SESSION["adress"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Api CEP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

  <?php
    if(isset($_GET['m'])) {    
      $msg = $_GET['m'];

      if ($msg == 'e') {
          echo "<div class='alert alert-danger' role='alert'>Digite um CEP válido!</div>";
      }
    }
  ?>

  <div class="container-md w-50" style="margin-top: 40px">
    <form action="viacep.php" method="POST">
      <p class="text-center h3">Consulte abaixo o CEP desejado</p>
      <div class="input-group input-group-lg" style="margin-top: 20px; margin-bottom: 20px">
        <input type="text" name="cep" class="form-control text-md-start" placeholder="Digite aqui o CEP" maxlength="8">
        <input type="submit" class="btn btn-primary">
      </div>
    </form>
    <div>
      <ul class="list-group">
        <li class="list-group-item">Cep: <?php echo($adress->cep); ?></li>
        <li class="list-group-item">Logradouro: <?php echo($adress->logradouro); ?></li>
        <li class="list-group-item">Complemento: <?php echo($adress->complemento); ?></li>
        <li class="list-group-item">Bairro: <?php echo($adress->bairro); ?></li>
        <li class="list-group-item">Localidade: <?php echo($adress->localidade); ?></li>
        <li class="list-group-item">Uf: <?php echo($adress->uf); ?></li>
        <li class="list-group-item">Ibge: <?php echo($adress->ibge); ?></li>
        <li class="list-group-item">Gia: <?php echo($adress->gia); ?></li>
        <li class="list-group-item">Ddd: <?php echo($adress->ddd); ?></li>
        <li class="list-group-item">Siafi: <?php echo($adress->siafi); ?></li>
      </ul>
    </div>
  </div>
  <?php session_destroy(); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>  
</body>
</html>