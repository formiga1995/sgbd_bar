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
<script>
        function on() {
            document.getElementById("overlay").style.display = "block";
            document.getElementsByClassName("add")[0].style.display = "block";
        }
        function off() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("add")[0].style.display = "none";
        }
        function editon(numero) {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("ideia").value = numero;
            document.getElementById("ideia").innerHTML = numero;
            document.getElementsByClassName("edit")[0].style.display = "block";
        }
        function editoff() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("edit")[0].style.display = "none";
        }
    </script>
<body>
    <?php
        include 'conectar.php';
        if(isset($_POST['adicionar'])){
        $sql = "INSERT INTO funcionario (ID_FUNCIONARIO, TELEFONE, NOME, CPF, ID_ENDERECO,ID_TIPO_FUNCIONARIO)
        VALUES ('".$_POST["id"]."','".$_POST["tel"]."','".$_POST["nome"]."','".$_POST["cpf"]."','".$_POST["id2"]."','".$_POST["tipop"]."')";
        $stmt = mysqli_prepare($conn, $sql);
        $stmt->execute();
    }
    ?>
    <div class="ol" id="overlay">   </div>
    <form class="add" method="post" style="" align="center">
        <button class="fecha" onclick="off()">X</button>
        <div class="infolay">Insira os dados do funcionario</div>
        <div class="line"></div>
        <input class="insira" name="id" placeholder="ID"></input>
        <input class="insira" name="nome" placeholder="Nome"></input>
        <input class="insira" name="tel" placeholder="Telefone"></input>
        <input class="insira" name="id2" placeholder="ID_ENDERECO"></input>
        <input class="insira" name="cpf" placeholder="CPF"></input>
        <select class="insira" name="tipop">
                <option value="" disabled selected hidden>Ocupacao</option>
                <option value="1">Garcom</option>
                <option value="2">Chefe</option>
                <option value="3">Caixa</option>
                <option value="4">Cozinheiro</option>
        </select>
        <button class="confirma" type="submit" name="adicionar">Adicionar Funcionario</button>
    </form>

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
        <button class="item" onclick="on()">Incluir Funcionario</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

    </div>
            
    </body>
</html>