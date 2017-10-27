<?php
  $servername = "localhost";  //Seleciona o servidor
  $username = "root";  //O nome do lixo
  $password = "22561801"; //A senha do servidor

  // Cria a porcaria da conexão
  $conn = mysqli_connect($servername, $username, $password);

  // Checa a conexão e pode encerrar esse lixo
  if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
  }

  mysqli_select_db($conn,"BarRest");  //Esse lixo aqui seleciona qual o banco a ser usado
?>