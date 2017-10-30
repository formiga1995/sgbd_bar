<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilocompra.css">
    <title>Compra</title>
</head>
<body>
	<div class="menu">
        <div   class="search">
            <input class="entre" placeholder="Pesquise aqui..."></input>
        </div>
		<div class="linha" align='center'></div>
		<div>
			<select class="campos" placeholder="Produto">
				<option hidden>Produto...</option>
                <?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                            include 'conectar.php';
                        //$database = new $conn;
                        //$db = ;
                        $consulta_produto     =   "SELECT NOME, MARCA from PRODUTO";

                        //$resultado_consulta = mysqli_query($conn, $consulta_produto);
                       $result = $conn->query($consulta_produto);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if( $row["MARCA"] != null )
                            echo "<option>".$row["MARCA"]." - ".$row["NOME"]."</option>";
                        else
                            echo "<option>".$row["NOME"]."</option>";
                    }
                } else {
                    echo "<option>0 results</option>";
                }
                ?>  
			</select>
			<select class="campos" placeholder="Comanda">
				<option hidden>Comanda...</option>
                <?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                            include 'conectar.php';
                        //$database = new $conn;
                        //$db = ;
                        $consulta_produto     =   "SELECT ID_COMANDA, VALOR_TOTAL from COMANDA ORDER BY ID_COMANDA desc";

                        //$resultado_consulta = mysqli_query($conn, $consulta_produto);
                       $result = $conn->query($consulta_produto);

                            echo "<option> Nova comanda </option>";

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            echo "<option>".$row["ID_COMANDA"]." - ".$row["VALOR_TOTAL"]."</option>";
                    }
                } else {
                    echo "<option>0 results</option>";
                }
                ?>
			</select>
			

<form method="POST" id="quant" action="quantidadeproduto.php">
    

            <input class="campo" type="text" placeholder="Quantidade" name="qt" id="qt"  onchange="functionone()"></input>



</form>

			<div class="infor">Valor: R$
                
            </div>
		</div>
        <button class="item">Confirmar Compra</button><br>
    </div>
    <script>
        function functionone(){
            document.getElementByID("quant").reset();

        } 
    </script>
</body>
</html>