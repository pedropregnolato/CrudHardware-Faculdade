<html>

<head>
    <title>Resultados da consulta</title>
    <style type="text/css">
        body {
            font-family: arial, sans-serif;
            background-color: #202020
        }

        table {
            background-color: #FFF
        }

        td {
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 4px;
            padding-right: 4px;
            border-width: 1px;
            border-style: inset
        }

        h3 {
            color: #FFF;
        }
    </style>
</head>

<body>
    <?php
    extract($_POST);
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodados = "hardware";
    $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    $consulta = "SELECT " . $selecionar . " FROM perifericos";
    $resultado = $conexao->query($consulta);
    ?>
    <h3>Resultados da pesquisa</h3>
    <table>
        <?php
        print("<tr>");
        if ($resultado = $conexao->query($consulta)) {
            print("$selecionar");
            while ($acesso = $resultado->fetch_row()) {
                printf("<td> %s \n", $acesso[0]);
                print("</tr>");
            }
            $resultado->free_result();
        }
        $conexao->close();
        ?>
    </table>
    <br />
    <h3>Sua pesquisa para Periferico</h3>
</body>

</html>