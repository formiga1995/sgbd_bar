<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\estilocompra.css">
    <title>Relatorios</title>
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
            $view_garcom = "SELECT * FROM RELATORIO_GARCOM;";
            $result = $conn->query($view_garcom);


    ?>

<div class="menu">
        <button class="item" onclick="on()">Relatorio Garcom</button>
        <button class="item" onclick="on()">Relatorio RH</button>
        <button class="item" onclick="on()">Relatorio de Vendas</button>
        <button class="item" onclick="on()">View Cozinheiro</button>
        <button class="item" onclick="window.location.href='\index.html'">Voltar</button>
    </div>

</body>