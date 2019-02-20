<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista 2 - Vetores</title>
</head>
<body>
	<?php

	echo "<strong>- - - - - EXERCÍCIO 1 - - - - -</strong><br><br>";

	$vet_0 = array();

	for($i=0;$i<50;$i++){

		$vet_0[$i] = 42;

	}

	echo "<pre>";
	print_r($vet_0);
	echo "</pre>";

	echo "<br><br><strong>- - - - - EXERCÍCIO 2 - - - - -</strong><br><br>";

	$vet_1 = array();

	for($i=1;$i<=50;$i++){
		$vet_1[$i] = $i;
	}
	echo "<pre>";
	print_r($vet_1);
	echo "</pre>";

	echo "<br><br><strong>- - - - - EXERCÍCIO 3 - - - - -</strong><br><br>";

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


	echo "<br><br><strong>- - - - - EXERCÍCIO 4 - - - - -</strong><br><br>";

	$vet_3=array();
	for($i=1;$i<=50;$i++){
		$vet_3[$i]= $i*2;
	}
	echo "<pre>";
	print_r($vet_3);
	echo "</pre>";

	echo "<br><br><strong>- - - - - EXERCÍCIO 5 - - - - -</strong><br><br>";

	?>
	<select>

		<?php

		$vet_4=array(
			0=>"Eletrônicas",
			1=>"Martin Garrix",
			2=>"David Guetta",
			3=>"Calvin Harris",
			4=>"Avicii",
			5=>"Alok",
			6=>"Jonas Blue",
			7=>"Alan Walker",
			8=>"Marshmello",
			9=>"Tiesto"	
		);

		for($i=0;$i<10;$i++){

		?>	
	<option>
		<?php
			echo $vet_4[$i];
		?>

	</option>
	<?php 
}
	?>
	</select>


</body>
</html>


