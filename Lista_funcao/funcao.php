<!DOCTYPE html>
<html>
<head>
	<title>Lista 3</title>
	<meta charset="utf-8">
</head>
<body>
    
    <?php 
        echo "- - - - - Exercício 1 - - - - -<br><br>";
        $numero = 17;
        function primo($numero):bool{

            $primo=1;
            $cont=0;

            while($primo<=$numero){
                if($numero%$primo==0){
                $cont++;
            }
            
            $primo++;
            
            }

            if($cont==2){
                return true;
            }else{
                return false;
            }
        }
        
        if(primo($numero)){
           echo $numero. " - Primo<br>";
        }else{
            echo $numero. " - Composto<br>";
        }

        echo "<br><br>- - - - - Exercício 2 - - - - -<br><br>";

        for($i=1;$i<=100;$i++){
            if(primo($i)){
                print $i." ";
            }
        }

        echo "<br><br>- - - - - Exercício 3 - - - - -<br><br>";   
    ?>
    
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