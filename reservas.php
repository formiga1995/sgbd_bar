<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Reservas</title>
    
</head>
<body>

	<div class="menu">
        <div   class="search">
            <input class="entre" placeholder="Pesquise aqui..."></input>
        </div>
		<div class="linha" align='center'></div>
		<table class="tabela">
			<tr>
				<th><input class="entab" placeholder="MESA"></input></th>
				<th><input class="entab" placeholder="CLIENTE"></input></th> 
				<th><input class="entab" placeholder="HORARIO"></input></th>
			</tr>
			
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $consulta_reserva     =   "SELECT A.ID_CLIENTE,A.ID_MESA,A.DATA_HORA_RESERVA,B.ID_CLIENTE,B.NOME 
                                            FROM RESERVA A, CLIENTE B
                                            WHERE A.ID_CLIENTE = B.ID_CLIENTE;";

                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($consulta_reserva);

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
        <button class="item" onclick="">Reservar mesa</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

    </div>
            
    </body>
</html>