<?php

$operacao = $_GET["operacao"];

if($operacao=="soma"){
    
    
    print $_GET["n1"]+$_GET["n2"]+$_GET["n3"]+$_GET["n4"];
    
    
}elseif($_GET["operacao"]=="multiplicacao"){
    
    
    print "Multiplicação: ".$_GET["n1"]*$_GET["n2"]*$_GET["n3"]*$_GET["n4"];
    
    
}elseif($_GET["operacao"]=="subtracao"){
    
    
    print $_GET["n1"]-$_GET["n2"]-$_GET["n3"]-$_GET["n4"];
    
    
}elseif($_GET["operacao"]=="divisao"){
    
    
   print "Divisão: ".$_GET["n1"]/$_GET["n2"];
}
