<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista 2 - Vetores (Exercício 3)</title>
</head>
<body>
    <h2>- - - - - EXERCÍCIO 3 - - - - -</h2>
        
	<?php

	$somatotal=0;
	$cont=0;
	$vet_2=array();

	for($i=0;$i<30;$i++){
			
		$vet_2[$i]=$i;
		$somatotal+=$vet_2[$i];
		$cont+=1;

	}

	$resul=array();
	for($i=1;$i<30;$i++){
		if ($vet_2[$i]>$vet_2[$i-1]) {
			$resul[0]=$vet_2[$i];
			$resul[1]=$i;
		}
	}
	echo "<pre>";
	print_r($vet_2);
	echo "</pre>";

	print "<br>Maior elemento do vetor: ".$resul[0];
	print "<br>Posição: ".$resul[1];
	print "<br>Soma total: ".$somatotal;
	print "<br>Média: ".$somatotal/$cont;

	?>

</body>
</html>
