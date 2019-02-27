<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista 2 - Vetores (Exercício 5)</title>
</head>
<body>
    <h2>- - - - - EXERCÍCIO 5 - - - - -</h2>
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
