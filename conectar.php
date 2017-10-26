<?php
  $servername = "127.0.0.1";  //Seleciona o servidor
  $username = "Sepultura";  //O nome do lixo
  $password = " "; //A senha do servidor

  // Cria a porcaria da conexão
  $conn = mysqli_connect($servername, $username);

  // Checa a conexão e pode encerrar esse lixo
  if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
  }

  mysqli_select_db($conn,"BarRest");  //Esse lixo aqui seleciona qual o banco a ser usado
?>