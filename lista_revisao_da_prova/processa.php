<?php

$salario = $_POST["salario"];
$percentual = $_POST["percentual"];

function novo_salario($salario,$percentual){
    $porcentagem=$salario+($salario*($percentual/100));
    return $porcentagem;
}

echo "Nome: ". $_POST["nome"]."<br>";
echo "Salário: ".$salario."<br>";
echo "Percentual de aumento: ".$percentual."<br>";
echo "Novo salário: ".novo_salario($salario,$percentual)."<br>";


?>

