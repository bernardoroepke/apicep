<?php

if (isset($_POST['cep'])) {

  $cep = $_POST['cep'];
  $url = "https://viacep.com.br/ws/{$cep}/json/";
  $adress = json_decode(file_get_contents($url)); 
  
  session_start();
  $_SESSION["adress"] = $adress;

  if($adress) {  
    Header("Location: index.php");
  } else {
    Header("Location: index.php?m=e");
  }
}

?>