<?php

$vet = array (
    
0 => $_POST["n1"],
1 => $_POST["n2"],
2 => $_POST["n3"],
3 => $_POST["n4"],
4 => $_POST["n5"] 

);
$maior=0;
$vetor = array();
$cont = 0;
for($i=0;$i<count($vet);$i++){
    if($vet[$i]>$maior){
        $maior=$vet[$i];
    }
    if($vet[$i]%2==0){
        $vetor[$cont]=$vet[$i];
        $cont++;
    }

}
print "Números pares: ".implode($vetor,", ");
print "<br>Maior número: ". $maior;

?>