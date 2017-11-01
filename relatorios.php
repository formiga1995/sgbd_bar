<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Relatorios</title>
    <script>
        function oncoz() {
            document.getElementById("overlay").style.display = "block";
            document.getElementsByClassName("vcoz")[0].style.display = "block";
        }
        function offcoz() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("vcoz")[0].style.display = "none";
        }
        function ongar() {
            document.getElementById("overlay").style.display = "block";
            document.getElementsByClassName("vgar")[0].style.display = "block";
        }
        function offgar() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("vgar")[0].style.display = "none";
        }
        function onven() {
            document.getElementById("overlay").style.display = "block";
            document.getElementsByClassName("vven")[0].style.display = "block";
        }
        function offven() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("vven")[0].style.display = "none";
        }
        function onrh() {
            document.getElementById("overlay").style.display = "block";
            document.getElementsByClassName("vrh")[0].style.display = "block";
        }
        function offrh() {
            document.getElementById("overlay").style.display = "none";
            document.getElementsByClassName("vrh")[0].style.display = "none";
        }
        function offall(){
            offcoz();
            offgar();
            offven();
            offrh();
        }
    </script>
</head>

<body>
    <?php
    include 'conectar.php';
    ?>
    <div class="ol" id="overlay" onclick="offall()">   </div>


    <div class="vgar" style="width:1000px;" method="post" style="" align="center">
        <button class="fecha" onclick="offgar()">X</button>
        <div class="infolay">Relatório do Garçom</div>
        <table class="tabela" style="width:1000px;">
            <tr>
                <th><div class="entab">Garcom</div></th>
                <th><div class="entab">Cliente</div></th>
                <th><div class="entab">Mesa</div></th> 
                <th><div class="entab">Comanda</div></th> 
                <th><div class="entab">Item da Compra</div></th> 
                <th><div class="entab">Nome do Produto</div></th> 
                <th><div class="entab">Marca</div></th> 
                <th><div class="entab">Data de Compra</div></th>  
            </tr>
        <?php
                include 'conectar.php';
                $consulta_produto     =   "SELECT * FROM relatorio_garcom;";
               $result = $conn->query($consulta_produto);
               
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Garçom"]."</td>";
                echo "<td>".$row["Cliente"]."</td>";
                echo "<td>".$row["Mesa"]."</td>";
                echo "<td>".$row["Número da Comanda"]."</td>";
                echo "<td>".$row["Item da Compra"]."</td>";
                echo "<td>".$row["Nome do Produto"]."</td>";
                echo "<td>".$row["Marca do Produto"]."</td>";
                echo "<td>".$row["Data e Hora da Compra"]."</td>";
                //echo "<td>".$row["TIPO"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
    </div>

    <div class="vcoz" style="width:800px;" method="post" style="" align="center">
        <button class="fecha" onclick="offcoz()">X</button>
        <div class="infolay">View do Cozinheiro</div>
        <table class="tabela">
            <tr>
                <th><div class="entab">ID</div></th>
                <th><div class="entab">Produto</div></th>
                <th><div class="entab">Preço</div></th> 
            </tr>
        <?php
                include 'conectar.php';
                $consulta_produto     =   "SELECT * FROM view_cozinheiro;";
               $result = $conn->query($consulta_produto);
               
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Id_produto"]."</td>";
                echo "<td>".$row["Nome_Produto"]."</td>";
                echo "<td>".$row["Quantidade_Estoque"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
    </div>

    <div class="vven" style="width:800px;" method="post" style="" align="center">
        <button class="fecha" onclick="offven()">X</button>
        <div class="infolay">Relatório de Vendas</div>
        <table class="tabela">
            <tr>
                <th><div class="entab">Nome</div></th>
                <th><div class="entab">Marca</div></th>
                <th><div class="entab">Consumo</div></th> 
            </tr>
        <?php
                include 'conectar.php';
                $consulta_produto     =   "SELECT * FROM relatorio_vendas;";
               $result = $conn->query($consulta_produto);
               
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Nome"]."</td>";
                echo "<td>".$row["Marca"]."</td>";
                echo "<td>".$row["Consumo"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
    </div>

    <div class="vrh" style="width:800px;" method="post" style="" align="center">
        <button class="fecha" onclick="offrh()">X</button>
        <div class="infolay">Relatório de Recursos Humanos</div>
        <table class="tabela">
            <tr>
                <th><div class="entab">ID</div></th>
                <th><div class="entab">Nome</div></th>
                <th><div class="entab">CPF</div></th> 
                <th><div class="entab">Telefone</div></th>
                <th><div class="entab">CEP</div></th>
                <th><div class="entab">Endereço</div></th>
                <th><div class="entab">Cargo</div></th>
            </tr>
        <?php
                include 'conectar.php';
                $consulta_produto     =   "SELECT * FROM RELATORIO_RH;";
               $result = $conn->query($consulta_produto);
               
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["CPF"]."</td>";
                echo "<td>".$row["TELEFONE"]."</td>";
                echo "<td>".$row["CEP"]."</td>";
                echo "<td>".$row["ENDEREÇO"]."</td>";
                echo "<td>".$row["Cargo"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
    </div>


    <div class="container">
    <div class="menu">
        <button class="item" onclick="ongar()">Relatorio Garcom</button><br>
        <button class="item" onclick="onrh()">Relatorio RH</button><br>
        <button class="item" onclick="onven()">Relatorio de Vendas</button><br>
        <button class="item" onclick="oncoz()">View Cozinheiro</button>
        <br><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>
    </div>
    </div>

</body>
