<?php
//lectura rápida del fichero
$texto = file_get_contents('files/helloworld.txt');
echo $texto;

$lon = readfile('files/helloworld.txt');
echo $lon;

//leactura lia a linea en array
$arrayLineas = file('files/helloworld.txt');

echo '<br>';
print_r($arrayLineas);
?>