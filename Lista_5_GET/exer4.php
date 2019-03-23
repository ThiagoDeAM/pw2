<?php

$prontuarios=array(
    0=> "1831232",
    1=> "183102X",
    2=> "1831216",
    3=> "1831224",

);

echo "<strong>Prontuários de amigos(as):</strong><br><br>";

for($i=0;$i<4;$i++){
    echo "<a href='mostraNome.php?id=$prontuarios[$i]'>$prontuarios[$i]</a><br><br>";
}

?>

