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

                            for($i=1;$i<=31;$i++){
                                echo "<option value='$i'>$i</option>";
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
                            echo "<option value='$vet_1[$j]'>$vet_1[$j]</option>";
                        }
			?>	


	</select>
	<select id="ano" name="ano">

		<option>Ano</option>
			<?php

			for($k=1905;$k<=2019;$k++){
                            echo "<option value='$k'>$k</option>";
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
