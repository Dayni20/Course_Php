<?php
///////////////////////////////COMPARACION
$a=10;
$b=20;
//echo $a==$b; //---->OPCION1
var_dump($a==$b);//---->OPCION2 var dump proporciona el tipo de dato de la varibele
echo "<br>";
var_dump($a<>$b);//---->OPCION2 signo significa si son diferentes
echo "<br>";
var_dump($a<=$b);
echo "<br>";
echo "<br>";
echo "<br>";


///////////////////////////////LOGICOS
$c=true;
$d=false;
var_dump($c&&$d); //si los dos son true
var_dump($c||$d);//si al menos uno es true

?>