<?php
	//Exercício 1
	echo "<strong>- - - - - EXERCÍCIO 1 - - - - -</strong><br><br>";
	
	$nota1=10;
	$nota2=4;
	$nota3=8;
	$nota4=6;
	
	echo "Primeira Nota : ".$nota1."<br>Segunda Nota: ".$nota2."<br>Terceira Nota: ".$nota3."<br>Quarta Nota: ".$nota4."<br>";
	
	$media=($nota1+$nota2+$nota3+$nota4)/4;

	if($media>=6){
		echo "Média: ".$media."<br>Situação Final: Aprovado<br>";
	}else{
		echo "Média: ".$media."<br>Situação Final: Reprovado<br>";
	}

	//Exercício 2	
	echo "<br><strong>- - - - - EXERCÍCIO 2 - - - - -</strong><br><br>";
	
	$salario = 1200;

	if($salario<=1000){
		$bonus=$salario*40/100;
	}else{
		$bonus=$salario*30/100;
	}
	
	echo "Salário Atual: ".$salario."<br>";
	echo "Bônus: ".$bonus."<br>";
	echo "Salário com o bônus: ".($salario+$bonus)."<br>";

	//Exercício 3
	echo "<br><strong>- - - - - EXERCÍCIO 3 - - - - -</strong><br><br>";
	
	$media=7.5;
	$frequencia=0.75;
	echo "Média: ".$media."<br>Frequência: ".$frequencia."<br>";
	
	if(($media>=6)&&($frequencia>=0.75)){
		print "Situação Final: Aprovado<br>";
	}else{
		print "Situação Final: Reprovado<br>";
	}

	//Exercício 4
	echo "<br><strong>- - - - - EXERCÍCIO 4 - - - - -</strong><br><br>";

	echo "Números pares entre o intervalo de 0 até 100:<br>";	
	for($i=0;$i<=100;$i++){
		if($i%2==0){

			print $i."\n | ";	
		}
	}
	echo "<br>";

	//Exercício 5
	echo "<br><strong>- - - - - EXERCÍCIO 5 - - - - -</strong><br><br>";
	
	$number1=-2;
	$number2=-1;

	echo "Número 1: ".$number1."<br>Número 2: ".$number2."<br>";
	
	if($number1>$number2){
	  print "Maior valor entre os dois números: ".$number1."<br>";  
	}else{
	   print "Maior valor entre os dois números: ".$number2."<br>";
	}


	//Exercício 6
	echo "<br><strong>- - - - - EXERCÍCIO 6 - - - - -</strong><br><br>";
	
	$num1=10;
	$num2=20;
	$num3=30;
	
	echo "Número 1: ".$num1."<br>Número 2: ".$num2."<br>"."Número 3: ".$num3."<br>";
	
	if($num1>$num2){
	   print "Maior valor entre os três números: ".$num1."<br>"; 
	}elseif($num2>$num3){
	   print "Maior valor entre os três números: ".$num2."<br>"; 
	}elseif($num3>$num1){
	   print "Maior valor entre os três números: ".$num3."<br>"; 
	}

	//Exercício 7
	echo "<br><strong>- - - - - EXERCÍCIO 7 - - - - -</strong><br><br>";
	
	$n1=5;
	$n2=4;
	
	echo "Número 1: ".$n1."<br>Número 2: ".$n2."<br>";
	if($n1==$n2){
		echo "Os números são iguais";
	}elseif($n1<$n2){
		print "O primeiro número é menor do que o segundo.<br>";
	}else{
		print "O primeiro número é maior do que o segundo.<br>";	
	}

	//Exercício 8
	echo "<br><strong>- - - - - EXERCÍCIO 8 - - - - -</strong><br><br>";
	
	$idade=59;

	if(($idade<18)||($idade>60)){
		
		print "Idade do sujeito: ".$idade."<br>Meia entrada.<br>";
	}else{
		print "Idade do sujeito: ".$idade."<br> Entrada Inteira.<br>";
	}
	
	//Exercício 9
	echo "<br><strong>- - - - - EXERCÍCIO 9 - - - - -</strong><br><br>";
	
	for($j=1;$j<=10;$j++){
		echo "<strong>Tabuada do ".$j."</strong><br><br>";
			for($i=1;$i<=10;$i++){
				print $j." x ".$i." = ".($j*$i)."\n| ";
			}
		echo "<br><br>";
	}
?>

