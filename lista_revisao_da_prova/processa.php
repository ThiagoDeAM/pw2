<?php

$salario = $_POST["salario"];
$percentual = $_POST["percentual"];

function novo_salario($salario,$percentual){
    $porcentagem=$salario+($salario*($percentual/100));
    return $porcentagem;
}

echo ()


?>

