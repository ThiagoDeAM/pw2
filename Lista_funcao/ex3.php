<!DOCTYPE html>
<html>
<head>
	<title>Questão 3</title>
	<meta charset="utf-8">
</head>
<body>
    <h1>Questão 3</h1>
    <ul>
        <?php
            $color=array(
                'Preto',
                'Branco',
                'Verde',
                'Vermelho',
                'Marrom',
                'Rosa',
                'Azul',
                'Roxo',
                'Amarelo',
                'Cinza'
            );
         
            function lista_nao_ordenada_de_cores_HTML($color){
                for($j=0;$j < count($color);$j++){    
            ?>                          
                <li> 
                    <?php 
                    echo $color[$j];               
                    ?>
                </li>
        <?php  
                 }
            }
            lista_nao_ordenada_de_cores_HTML($color);

        ?>
   
</ul>

</body>
</html>