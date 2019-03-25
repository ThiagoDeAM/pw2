<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$par=array();
$impar=array();
$num=0;
$media=0;
$soma=0;

for($i=$n1;$i<=$n2;$i++){
    $soma=$soma+$i;
    $media++;
    if($i%2==0){
        $par[$num]=$i;
        $num++;
    }else{
        $impar[$num]=$i;
        $num++;
    }
}

print "Valor inicial = ".$n1.", valor final = ".$n2.".<br>";
print "Valores pares entre ".$n1." e ".$n2.": <br>".implode($par,"<br>")."<br>";
print "Valores ímpares entre ".$n1." e ".$n2.": <br>".implode($impar,"<br>")."<br>";
print "A média dos valores entre ".$n1." e ".$n2." é: ".$soma/$media;

echo "<br><br><a href='ex1.php'>Voltar</a>";

?>

