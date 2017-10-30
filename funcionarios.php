<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Funcionarios</title>
    
</head>
<body>

	<div class="menu">
        <div   class="search">
            <input class="entre" placeholder="Pesquise aqui..."></input>
        </div>
		<div class="linha" align='center'></div>
		<table class="tabela">
			<tr>
				<th><input class="entab" placeholder="NOME"></input></th>
				<th><input class="entab" placeholder="TELEFONE"></input></th> 
				<th><input class="entab" placeholder="CPF"></input></th>
			</tr>
			
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $consulta_funcionario     =   "SELECT NOME, TELEFONE, CPF
                                         FROM FUNCIONARIO";

                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($consulta_funcionario);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["TELEFONE"]."</td>";
                echo "<td>".$row["CPF"]."</td>";
                //echo "<td>".$row["TIPO"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
		</table>
        <button class="item">Incluir Funcionario</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

    </div>
            
    </body>
</html>