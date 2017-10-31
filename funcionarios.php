<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Funcionarios</title>
    
    <script>
        function on() {
            document.getElementById("overlay").style.display = "block";
            document.getElementsByClassName("add")[0].style.display = "block";
        }
        function off() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("add")[0].style.display = "none";
        }
    </script>>
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

                $view_cozinheiro = "SELECT * FROM VIEW_COZINHEIRO";
                $result_cozinheiro = $conn->query($view_cozinheiro);
                $result_funcionario = $conn->query($consulta_funcionario);
                if ($result_funcionario->num_rows > 0) {
            // output data of each row
            while($row = $result_funcionario->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID_PRODUTO"]."</td>";
                echo "<td>".$row["NOME_PRODUTO"]."</td>";
                echo "<td>".$row["QUANTIDADE_ESTOQUE"]."</td>";
                //echo "<td>".$row["TIPO"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

                

                $view_vendas = "SELECT * FROM RELATORIO_VENDAS";
                $result_vendas = $conn->query($view_vendas);

                $view_garcom = "SELECT * FROM RELATORIO_GARCOM";
                $result_garcom = $conn->query($view_garcom);


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
        <button class="item">Relatório RH</button><br>
        <button class="item">Relatório do Garçom</button><br>
        <button class="item">Relatório de Vendas</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

        <form class="add" method="post" style="" align="center">
            <button class="fecha" onclick="editoff()">X</button>
            <table class="tabela">
                <tr>
                    <th><input class="entab" placeholder="NOME"></input></th>
                    <th><input class="entab" placeholder="TELEFONE"></input></th> 
                    <th><input class="entab" placeholder="CPF"></input></th>
                </tr>
                    <?php
                    include 'conectar.php';
                    $view_rh = "SELECT * FROM RELATORIO_RH";
                    $result_rh = $conn->query($view_rh);

                    if ($result_rh->num_rows > 0) {
                // output data of each row
                while($row = $result_rh->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["ID"]."</td>";
                    echo "<td>".$row["NOME"]."</td>";
                    echo "<td>".$row["CPF"]."</td>";
                    echo "<td>".$row["TELEFONE"]."</td>";
                    echo "<td>".$row["CEP"]."</td>";
                    echo "<td>".$row["ENDEREÇO"]."</td>";
                    echo "<td>".$row["CARGO"]."</td>";
                    //echo "<td>".$row["TIPO"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }?>
            </table>
    </form>
    </div>
            
    </body>
</html>