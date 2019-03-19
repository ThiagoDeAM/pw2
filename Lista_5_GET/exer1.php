<?php

$vet=array(
    0=>$_GET["v1"],
    1=>$_GET["v2"],
    2=>$_GET["v3"],
    3=>$_GET["v4"],
    4=>$_GET["v5"]
);

$maior=0;
$vetor = array();
$multiplo = array();
$c=0;
$cont = 0;
for($i=0;$i<count($vet);$i++){
    if($vet[$i]>$maior){
        $maior=$vet[$i];
    }
    if($vet[$i]%2==0){
        $vetor[$cont]=$vet[$i];
        $cont++;
    }
    if(($vet[$i]%3==0)&&($vet[$i]%5==0)){
        $multiplo[$c]=$vet[$i];
        $c++;
    }
}
print "Números pares: ".implode($vetor,", ");
print "<br>Maior número: ". $maior."<br>";
print "Números múltiplos de 3 e 5: ".implode($multiplo,", ");

?>

