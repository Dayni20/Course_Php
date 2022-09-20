<?php   
$nota1=20;
$nota2=30;
$sum=$nota1+$nota2;

$nombre="Dayana";



echo "la suma es {$sum}";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hola mi nombre es.$nombre"; ?></h1>
    <h1><?php echo "Hola mi nombre es $nombre"; ?></h1>
    <h1><?php echo "Hola mi nombre es".$nombre; ?></h1>
</body>
</html>