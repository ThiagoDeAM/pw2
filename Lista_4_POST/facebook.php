<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<meta charset="utf-8">
</head>
<body>
    <h1>Abra uma conta</h1>
    <h3>É gratuito e sempre será.</h3>


	    <input type="text" name="nome" placeholder="Nome">
	    <input type="text" name="sobrenome" placeholder="Sobrenome">
	    <input type="text" name="email" placeholder="E-mail ou número do celular">
	    <input type="texto" name="email_conf" placeholder="Insira novamente o email ou o celular">
	    <input type="password" name="senha" placeholder="Nova senha">    	

    <h2>Aniversário</h2>
    <input type="radio" name="senha"><p>Feminino</p> 
    <input type="radio" name="senha"><p>Masculino</p>
	<select>

		<option>Dia</option>
			<?php
			$vet=array();
			for($i=0;$i<31;$i++){
				$vet[$i]=$i+1;
				$soma=$soma+$i;
			}
			for($i=0;$i<31;$i++){
			?>	
		<option>
			<?php
				echo $vet[$i];
			?>

		</option>
		<?php 
			}
		?>
	</select>
	<select>

		<option>Mês</option>
			<?php
			$vet_1=array(
				0=>Jan,
				1=>Fev,
				2=>Mar,
				3=>Abr,
				4=>Mai,
				5=>Jun,
				6=>Jul,
				7=>Ago,
				8=>Set,
				9=>Out,
				10=>Nov,
				11=>Dez,
			);
			for($i=0;$i<31;$i++){
				$vet[$i]=$i+1;
				$soma=$soma+$i;
			}
			for($i=0;$i<31;$i++){
			?>	
		<option>
			<?php
				echo $vet[$i];
			?>

		</option>
		<?php 
			}
		?>
	</select>


    <p>Ao clicar em Inscreva-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
    <button>Abrir uma conta</button>


</body>
</html>
