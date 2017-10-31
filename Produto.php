<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estiloproduto.css">
    <title>Produto</title>
   
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
</head>
<body>
    <?php
    include 'conectar.php';
    if(isset($_POST['adicionar'])){
        $sql = "INSERT INTO produto (NOME, MARCA, PRECO, QNT_ESTOQUE, ID_TIPO_PRODUTO)
        VALUES ('".$_POST["nomep"]."','".$_POST["marcap"]."','".$_POST["precop"]."','".$_POST["qte"]."','".$_POST["tipop"]."')";
        $stmt = mysqli_prepare($conn, $sql);
        $stmt->execute();
    }
    ?>
    <div class="ol" id="overlay">   </div>
    <form class="add" method="post" style="" align="center">
        <button class="fecha" onclick="off()">X</button>
        <div class="infolay">Insira os dados do produto</div>
        <div class="line"></div>
        <input class="insira" name="nomep" placeholder="Nome do Produto"></input>
        <input class="insira" name="marcap" placeholder="Marca do Produto"></input>
        <input class="insira" name="precop" placeholder="Preço do Produto"></input>
        <input class="insira" name="qte" placeholder="Quantidade no Estoque"></input>
        <select class="insira" name="tipop">
                <option value="" disabled selected hidden>Tipo do Produto...</option>
                <option value="2">Comida</option>
                <option value="1">Bebida</option>
        </select>
        <button class="confirma" type="submit" name="adicionar">Adicionar Produto</button>
    </form>
    <?php
    include 'conectar.php';
    if(isset($_POST['editar'])){
        $sql = "UPDATE PRODUTO set NOME='".$_POST["nomee"]."', MARCA='".$_POST["marcae"]."', PRECO='".$_POST["precoe"]."', QNT_ESTOQUE='".$_POST["qtee"]."', ID_TIPO_PRODUTO='".$_POST["tipoe"]."' WHERE ID_PRODUTO ='".$_POST["ide"]."'";
        mysqli_query($conn, $sql);
    }
    ?>
    <form class="edit" method="post" style="" align="center">
        <button class="fecha" onclick="editoff()">X</button>
        <div class="infolay">Insira os novos dados do produto</div>
        <div class="line"></div>
        <input class="insira" name="ide" id="ideia" ></input>
        <input class="insira" name="nomee" placeholder="Nome do Produto"></input>
        <input class="insira" name="marcae" placeholder="Marca do Produto"></input>
        <input class="insira" name="precoe" placeholder="Preço do Produto"></input>
        <input class="insira" name="qtee" placeholder="Quantidade no Estoque"></input>
        <select class="insira" name="tipoe">
                <option value="" disabled selected hidden>Tipo do Produto...</option>
                <option value="2">Comida</option>
                <option value="1">Bebida</option>
        </select>
        <button class="confirma" type="submit" name="editar">Adicionar Produto</button>
    </form>

    <div class="container">
    <div class="menu">
        <div>Produtos</div>
        <div class="linha" align='center'></div>
        <table class="tabela">
            <tr>
                <th><input class="entab" placeholder="ID"></input></th>
                <th><input class="entab" placeholder="Produto"></input></th>
                <th><input class="entab" placeholder="Preço"></input></th> 
                <th><input class="entab" placeholder="Quantidade"></input></th>
                <th><input class="entab" placeholder="Editar"></input></th>
            </tr>
            
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta
                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $consulta_produto     =   "SELECT ID_PRODUTO, NOME, QNT_ESTOQUE, PRECO, MARCA
                                         FROM PRODUTO";
                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($consulta_produto);
               
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID_PRODUTO"]."</td>";
                if( $row["MARCA"] != null )
                    echo "<td>".$row["MARCA"]." - ".$row["NOME"]."</td>";
                else
                    echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["PRECO"]."</td>";
                echo "<td>".$row["QNT_ESTOQUE"]."</td>";
                echo "<td><button onclick=\"editon(".$row["ID_PRODUTO"].")\">Editar</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
        <button class="item" onclick="on()">Adicionar Produto</button><br>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>

    </div>
    </div>

    </body>
</html>