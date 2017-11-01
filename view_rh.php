<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>RH</title>
    
</head>
<body>
    <style>
    .h1{
        font-family: "Montserrat", Times, serif;
        align-items: : center;
    }
</style>
    <h1>Relatorio de RH</h1>
    <table class="tabela">
            <tr>
                <th><input class="entab" placeholder="ID"></input></th>
                <th><input class="entab" placeholder="Nome"></input></th>
                <th><input class="entab" placeholder="CPF"></input></th> 
                <th><input class="entab" placeholder="TEL"></input></th>
                <th><input class="entab" placeholder="CEP"></input></th>
                <th><input class="entab" placeholder="END"></input></th>
                <th><input class="entab" placeholder="CARGO"></input></th>
            </tr>
			
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $view_rh     =   "SELECT * FROM RELATORIO_RH;";

                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($view_rh);
               if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["CPF"]."</td>";
                echo "<td>".$row["TELEFONE"]."</td>";
                echo "<td>".$row["CEP"]."</td>";
                echo "<td>".$row["ENDEREÇO"]."</td>";
                echo "<td>".$row["Cargo"]."</td>";
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