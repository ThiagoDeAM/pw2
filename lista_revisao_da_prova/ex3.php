<?php

$categorias=array(
    0=> "Doces",
    1=> "Salgados",
    2=> "Bebidas quentes",
    3=> "Bebidas geladas",
    4=> "doce",
    5=> "salgado",
    6=> "quente",
    7=> "gelado"
);


for($i=0;$i<4;$i++){
    $c = $i + 4;
    echo "<a href='exibe.php?categoria=$categorias[$c]'>$categorias[$i]</a><br><br>";
}
?>

