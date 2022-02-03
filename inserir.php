<?php
extract($_POST);
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancodados = "hardware";
$conexao = new mysqli($servidor, $usuario, $senha, 
$bancodados);
if ($conexao->connect_error) {
die("Conexão falhou: " . $conexao->connect_error);
}
$sql = "INSERT INTO perifericos (nome, categoria, valor)
VALUES ('$nome', '$categoria', $valor)";
if (mysqli_query($conexao, $sql)) {
echo "NOVO ITEM INSERIDO COM SUCESSO!";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);
?>