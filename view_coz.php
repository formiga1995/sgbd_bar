<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Pub</title>
    
</head>
<body>
    <style>
    .h1{
        font-family: "Montserrat", Times, serif;
        align-items: : center;
    }
</style>
    <h1>View Cozinheiro</h1>
    <table class="tabela">
            <tr>
                <th><input class="entab" placeholder="ID Produto"></input></th>
                <th><input class="entab" placeholder="Nome do Produto"></input></th>
                <th><input class="entab" placeholder="Quantidade Estoque"></input></th> 
                
            </tr>
			
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $view_rh     =   "SELECT * FROM view_cozinheiro;";

                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($view_rh);
               if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Id_produto"]."</td>";
                echo "<td>".$row["Nome_Produto"]."</td>";
                echo "<td>".$row["Quantidade_Estoque"]."</td>";
                
                //echo "<td>".$row["TIPO"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        ?>
        
        

    </div>
</table>
<button class="item" onclick="window.location.href='\index.html'">Voltar</button>
            
    </body>
</html>