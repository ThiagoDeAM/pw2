<?php

$n1= $_POST["n1"];
$n2= $_POST["n2"];
$operation = $_POST["operation"];

if($operation=="adicao"){
    print ($n1+$n2);
}elseif($operation=="sub"){
    print ($n1-$n2);
}elseif($operation=="mult"){
    print ($n1*$n2);
}else{
    print ($n1/$n2);
}

?>

