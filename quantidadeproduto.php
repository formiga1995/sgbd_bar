<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

              include 'conectar.php';
          //$database = new $conn;
          //$db = ;
          $consulta_produto     =   "SELECT PRECO from PRODUTO WHERE NAME = 'Rum' ";

          //$resultado_consulta = mysqli_query($conn, $consulta_produto);
         $result = $conn->query($consulta_produto);

  if ($_POST['qt'] != "") {
      echo $_POST['qt'];
  } else {
      echo "0,00";
  }
?>