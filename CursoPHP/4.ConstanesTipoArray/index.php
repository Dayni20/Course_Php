<?php
define('Animales',[

    'Perro',
    'Gato',
    'Loro',
    'Libelula'

]);

define('Curso','PHP');
define('Nombre','Dayana');

/////////////////////////////////////////////////////////////////////////////////////////////
echo Animales[1];
echo "<br>";
/////////////////////////////////////////////////////////////////////////////////////////////
if(defined('Nombre'))
{
    echo "Si se ha definido";
    echo "<br>";
}
else
{
    echo "No se definio";
}
?>