<?php

$vet=array(
    0=>$_POST["dia"],
    1=>$_POST["mes"],
    2=>$_POST["ano"]
);

echo "Bem vindo, ".$_POST["nome"]." ". $_POST["sobrenome"]."!<br>";

if($_POST["email"]==$_POST["email_conf"]){
    echo "E-mail ou número de celular: ".$_POST["email"]."<br>";    
}else{
    echo "E-mail não identificado. Tente novamente.<br>";
}

if($_POST["genero"]=="F"){
    print "Sexo: Feminino<br>";
}else{
    print "Sexo: Masculino<br>";
}
    print "Data de nascimento: ".$vet[0]." de ".$vet[1]." de ".$vet[2];


?>

