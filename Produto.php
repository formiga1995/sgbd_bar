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

	<div class="menu">
        <div   class="search">
            <input class="entre" placeholder="Pesquise aqui..."></input>
        </div>
		<div class="linha" align='center'></div>
		<table class="tabela">
			
			<tr>
				<th><input class="entab" placeholder="Produto"></input></th>
				<th><input class="entab" placeholder="Preco"></input></th> 
				<th><input class="entab" placeholder="Quantidade"></input></th>
				<th><input class="entab" placeholder="Tipo"></input></th>
			</tr>
			
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $consulta_produto     =   "SELECT NOME, QNT_ESTOQUE, PRECO, ID_TIPO_PRODUTO 
                                         FROM PRODUTO";

                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($consulta_produto);
			   
			   $adicionar_produto     = "INSERT INTO PRODUTO (NOME, PRECO,QNT_ESTOQUE, ID_TIPO_PRODUTO) VALUES ('ZOEIRA', '10.50',20, 1);";
			   
			   $adicionar = $conn->query($adicionar_produto);
			   
			   

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["PRECO"]."</td>";
                echo "<td>".$row["QNT_ESTOQUE"]."</td>";
				echo "<td>".$row["ID_TIPO_PRODUTO"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
		
		<script>
			var adicionar = <?=$adicionar?>;
		</script>
		
		</table>
        <button class="item" onclick =adicionar>Adicionar Produto</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

    </div>
            
    </body>
</html>