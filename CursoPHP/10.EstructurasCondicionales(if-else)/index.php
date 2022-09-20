<?php

$a=5;
$b=3;
echo "Primer parrafo <br>";

if($a>$b)
{
echo "Segundo parrafo <br>";
}
else
{
echo "Segundo parrado editado";
}
echo "Tercer parrafo <br>";


/////////////////////////////////////ANIDAR CONDICIONALES

if($a>$b){
    echo "a es mayor q b <br>";

}else if($a<$b){
    echo "a es menor q b <br>";
}else if($a=$b){
    echo "a es igual a b <br>";
}else{
    echo "Ninguna de las anteriore";
}



?>