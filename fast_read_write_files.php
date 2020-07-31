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

//escritura rapida en fichero
$nuevo_contenido = "Adios mundo \n me voy de aqui";

//crea el fichero en caso de que no exista
file_put_contents('files/byeworld.txt', $nuevo_contenido);
?>