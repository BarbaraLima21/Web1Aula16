<?php
$valor = $_GET["valor_reais"];

$dolar = $valor / 5;

echo json_encode(["dolar" => $dolar]);
?>