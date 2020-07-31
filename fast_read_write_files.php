<?php
//proteccion de variables vacias, inicialización
$comentario = '';

//EJERCICIO ACCESO A FICHEROS BÁSICO
//lectura rápida del fichero
//valida si existe
if(file_exists('files/helloworld.txt')){
	$texto = file_get_contents('files/helloworld.txt');
	//echo $texto;
}


//$lon = readfile('files/helloworld.txt');
//echo $lon;

//lectura linia a linea en array
$arrayLineas = file('files/helloworld.txt');

//echo '<br>';
//print_r($arrayLineas);

//escritura rapida en fichero
$nuevo_contenido = "Adios mundo \n me voy de aqui";

//crea el fichero en caso de que no exista
file_put_contents('files/byeworld.txt', $nuevo_contenido);

//EJERCICIO FORMULARIO
//comprobamos si existe el fichero cuando cargamos la página
if(file_exists('files/comentarios.txt')){
	$comentario = file_get_contents('files/comentarios.txt');
	//echo $comentario;
}

//comprobamos que exise Enviar cuando cargamos la página por primera vez mediante GET
if(isset($_GET['enviar'])){

	//si existe, leemos y evaluamos comentario
	$comentario = trim($_GET['comentario']);
	//echo "Este es el comentario:<br>";
	//echo $comentario;

	//crea el fichero en caso de que no exista
	file_put_contents('files/comentarios.txt', $comentario);
}

//EJERCICIO FICHEROS AVANZADO

//header acentos
header('Content-Type: text/html; charset=UTF-8');
//abrir fichero en modo r
$fichero = fopen('files/ejemplo.txt', 'r');

//leer letr a letra
while (!feof($fichero)) {
	$letra = fgetc($fichero);
	echo $letra;
}
echo "<br>";
$fichero = fopen('files/ejemplo.txt', 'r');
//leer linea a linia
while (!feof($fichero)) {
	$linea = fgets($fichero);
	echo $linea;
}



?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Formulario comentario en textarea</title>
	<meta charset='UTF-8'>
</head>
<body>
	<h3>Formulario comentario en textarea</h3>
	enviamos datos mediante GET
	<form method="get" action="#">
	<textarea name="comentario" cols="40" rows="5"><?=$comentario;?></textarea>
	
	<input type="submit" value='Enviar' name="enviar">
	
	
	</form>

	
</body>
</html> -->