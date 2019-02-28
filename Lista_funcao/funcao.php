<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
    <h1>First Answer</h1>
<?php 
    $numero = 13;
    function primo($numero):bool{
        
        $primo=1;
        $cont=0;
        
        while($primo<=$numero){
            if($numero%$primo==0){
            $cont=$cont+1;
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
       echo "Primo";
    }else{
        echo "Composto";
    }


    ?>
    
</body>
</html>
