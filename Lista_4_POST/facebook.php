<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="facebook.css">
</head>
<body>
    <div id="site">
        
    <h1>Abra uma conta</h1>
    <h3>É gratuito e sempre será.</h3>
        <form action="pagina_facebook.php" method="POST">
            <input id="nome" type="text" name="nome" placeholder="Nome">
            <input id="sobrenome" type="text" name="sobrenome" placeholder="Sobrenome"><br>
	    <input class="e-mail_senha" type="text" name="email" placeholder="E-mail ou número do celular"><br>
	    <input class="e-mail_senha" type="text" name="email_conf" placeholder="Insira novamente o email ou o celular"><br>
	    <input class="e-mail_senha" type="password" name="senha" placeholder="Nova senha">  	
   	        

	    
    <h2>Aniversário</h2>

    <div id="aniversario">
        <select id="dia" name="dia">

		<option>Dia</option>
			<?php
			$vet=array();
			for($i=0;$i<31;$i++){
				$vet[$i]=$i+1;
				$soma=$soma+$i;
			}
			for($i=0;$i<31;$i++){
			?>	
		<option value="<?php $i ?>">
			<?php
				echo $vet[$i];
			?>

		</option>
		<?php 
			}
		?>
	</select>
	<select id="mes" name="mes">

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
			for($j=0;$j<12;$j++){
			?>	
		<option value="<?php $j ?>">
			<?php
				echo $vet_1[$j];
			?>

		</option>
		<?php 
			}
		?>
	</select>
	<select id="ano" name="ano">

		<option>Ano</option>
			<?php
			$vet_2=array();
			for($k=1904;$k<2019;$k++){
				$vet_2[$k]=$k+1;
				$soma=$soma+$k;
			}
			for($k=1904;$k<2019;$k++){
			?>	
		<option value="<?php $k ?>">
			<?php
				echo $vet_2[$k];
			?>

		</option>
		<?php 
			}
		?>
	</select>
        <a href="#" id="pergunta">Por que preciso informar<br>minha data de nascimento?</a><br>     
    </div>
    <div id="sexo">
        <input type="radio" name="genero" value="F">Feminino
        <input type="radio" name="genero" value="M">Masculino      
    </div>

    <p>Ao clicar Abrir uma conta, você concorda com os nossos<br> <a href="#">Termos</a> e que leu a nossa <a href="#">Política de Dados</a> incluindo o nosso <br><a href="#">Uso de Cookies</a>.</p>
    <button type="submit" value="vai">Abrir uma conta</button>
         </form>   
    </div>
   


</body>
</html>
