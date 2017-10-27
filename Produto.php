<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <title>Pub</title>
    <style>
            body{
                background-color: #fbfbfa;
            }
            .menu{
                margin: auto;
                margin-top: 50px;
                padding: 40px;
                width: 500px;
                height: 540px;
                border-radius: 4px;
                background-color: #fdfdfd;
                box-shadow: 0px 2px 4px 0px #999;
                text-align: center;
            }
            .search{
                margin: auto;
                width: 500px;
                height: 44px;
                padding: 4px;
                border: 1px;
                border-radius: 4px;
                background-color: #fefefe;
                box-shadow: 0px 1px 2px 0px #999;
                font-family: "Montserrat", Times, serif;
            }
            .search:hover{
                box-shadow: 0px 1px 3px 0px #999;
            }
            .entre{
                float: left;
                margin: auto;
                width: 480px;
                height: 100%;
                padding: 16px;
                border: 0px;
                outline: 0px;
                background-color: transparent;
                color: #666;
				font-size: 18px;
                font-family: "Montserrat", Times, serif;
            }
			.linha{
                margin-top: 40px;
                margin-left: -40px;
                width: 580px;
                height: 1px;
                background-color: #aeaeae;
			}
			table, th, td {
				width: 500px;
                padding: 8px;
				border: 0px;
				border-collapse: collapse;
				color: #666;
                text-align: left;
				font-size: 14px;
                font-family: "Roboto", serif;
				font-weight: 100;
                transition: 1s;
			}
			table{
				margin-top: 40px;
                box-shadow: 0px 1px 3px 0px #aaa;
			}
			th{
				height: 36px;
				border: 0px solid #119911;
				background-color: #33bb55;
				color: #fefefe;
				font-size: 18px;
				text-align: center;
				font-style: thin;
                letter-spacing: 1px;
			}
			td{
				border: 0px;
				border-bottom: 1px solid #ddd;
			    text-align: center;
                letter-spacing: 1px;
			}
            tr{
                transition: .3s;
            }
            tr:not(:first-child):hover{
                box-shadow: 0px 1px 10px 0px #aaa;
            }
            td:hover{
                text-shadow: 0px 1px #ccc;
            }
            .entab{
                margin: auto;
                width: 100%;
                height: 50%;
                padding: 4px;
                padding-top: 14px;
                padding-bottom: 14px;
                border: 0px;
                outline: 0px;
                background-color: transparent;
				text-align: center;
                color: #eee;
				font-size: 18px;
                font-family: "Montserrat", Times, serif;
            }
            .entab:focus{
                border-bottom: 2px solid #eee;
            }
            .item{
                margin: auto;
                margin-top: 40px;
                padding: 4px;
                width: 320px;
                height: 44px;
                border-radius: 4px;
                border: 0px;
                background-color: #33bb55;
                font-family: "Montserrat", Times, serif;
                color: #fefefe;
                outline:0;
                
                font-size: 18px;
                letter-spacing: 1px;
                transition: .3s;
                /*box-shadow: inset 0 0 0 5em rgba(255,255,255,0.2);*/
                box-shadow: 0px 1px 2px 0px #999;
                transition: box-shadow 0.8s;
                list-style-type:none;
                display:inline-block;
                line-height:2em;
                color:#fff;
                position:relative;
                overflow:hidden;
                transition: 0.2s;
            }
            button {
                position: relative;
                overflow: hidden;
                padding: 16px 32px;
            }
            button:after {
                content: '';
                display: block;
                position: absolute;
                left: 50%;
                top: 50%;
                width: 420px;
                height: 420px;
                margin-left: -210px;
                margin-top: -210px;
                /*background: #3f51b5;*/
                background: #fff;
                border-radius: 100%;
                opacity: .2;
                transform: scale(0);
            }
            @keyframes ripple {
                0% {
                    transform: scale(0);
                }
                20% {
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(1);
                }
            }
            button:not(:active):after {
                animation: ripple 2.5s ease-out;
            }
            /* fixes initial animation run, without user input, on page load.
            */
            button:after {
                visibility: hidden;
            }
            button:focus:after {
                visibility: visible;
            }
            .item:hover, .botao:focus{
                background-color: #33bf45;
                box-shadow: 0px 1px 2px 0px #999;
                /*border-radius: 50%;*/
            }
            ::-webkit-input-placeholder, select.first-child { /* WebKit, Blink, Edge */
                color: #aaa;
            }
            .entab::-webkit-input-placeholder { /* WebKit, Blink, Edge */
                color: #fff;
                opacity: 0.7;
            }
            
    </style>
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
			</tr>
			
<?php  //Isso aqui tá só pra dar o select, mas tem que alterar o html pra mostrar de acordo com o resultado da consulta

                    include 'conectar.php';
                //$database = new $conn;
                //$db = ;
                $consulta_produto     =   "SELECT NOME, QNT_ESTOQUE, PRECO
                                         FROM PRODUTO";

                //$resultado_consulta = mysqli_query($conn, $consulta_produto);
               $result = $conn->query($consulta_produto);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["NOME"]."</td>";
                echo "<td>".$row["PRECO"]."</td>";
                echo "<td>".$row["QNT_ESTOQUE"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
		</table>
        <button class="item">Adicionar Produto</button><br>
    </div>
</body>
</html>