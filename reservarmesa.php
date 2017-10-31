<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Reservar Mesa</title>
    
</head>
<body>
<form method="POST" action="reservamesa.php">
    <div class="menu">
        <div   class="search">
            <input name="cliente" class="entre" placeholder="ID_CLIENTE"></input>
        </div>
            <div   class="search">
            <input name="mesa" class="entre" placeholder="ID_MESA"></input>
        </div>
        <div   class="search">
            <input name="hora" class="entre" placeholder="DATA_HORA_RESERVA"></input>
        </div>
        
        </form>
            
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta
                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                 $cliente = $_POST["cliente"];
                 $mesa = $_POST["mesa"];
                 $hora = $_POST["hora"];   
                $insere_reserva     =   "INSERT INTO RESERVA(ID_CLIENTE,ID_MESA,DATA_HORA_RESERVA) VALUES('$cliente','$mesa','$hora');";
                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($insere_reserva);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID_MESA"]."</td>";
                echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["DATA_HORA_RESERVA"]."</td>";
                //echo "<td>".$row["TIPO"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
        <button class="item" onclick="window.location.href='\ssss.html'">Reservar mesa</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

    </div>
            
    </body>
</html>