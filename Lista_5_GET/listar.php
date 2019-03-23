<?php

$movies=array(
    0=> "Os Vingadores: The Avengers",
    1=> "Vingadores: Era de Ultron",
    2=> "Vingadores: Guerra Infinita",
    3=> "Capitã Marvel",
    4=> "Deadpool 1",
    5=> "Deadpool 2",
    6=> "Capitão América: O Primeiro VIngador",
    7=> "Capitão América 2: O Soldado Invernal",
    8=> "Capitão América: Guerra Civil",
    9=> "Homem-Aranha: Longe de Casa"
);

echo "<ul>";
for($i=0;$i<10;$i++){
    echo "<li><a href='processa.php?id=$i'>$movies[$i]</a></li><br>";
}
echo "</ul>";

