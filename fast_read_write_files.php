<?php
//lectura rápida del fichero
//valida si existe
if(file_exists('files/helloworld.txt')){
	$texto = file_get_contents('files/helloworld.txt');
	echo $texto;
}


$lon = readfile('files/helloworld.txt');
echo $lon;

//lectura linia a linea en array
$arrayLineas = file('files/helloworld.txt');

echo '<br>';
print_r($arrayLineas);

//escritura rapida en fichero
$nuevo_contenido = "Adios mundo \n me voy de aqui";

//crea el fichero en caso de que no exista
file_put_contents('files/byeworld.txt', $nuevo_contenido);
?>