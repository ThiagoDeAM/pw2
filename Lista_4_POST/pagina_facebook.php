<?php

echo "Bem vindo, ".$_POST["nome"]." ". $_POST["sobrenome"]."!<br>";

if($_POST["email"]==$_POST["email_conf"]){
    echo "E-mail ou número de celular: ".$_POST["email"]."<br>";    
}else{
    echo "E-mail não identificado. Tente novamente.<br>";
}
 

?>

