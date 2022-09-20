<?php
/////////////////////////////////////ANIDAR CONDICIONALES

$a=5;
$b=3;

$valor= $a > $b ?'Mayor':'Menor';
echo $valor;



//////////////////////////////////Condicional anidada
$value= $a > $b ?'Mayor':($a < $b?'Menor':'Igual' );
echo $value;
?>