<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['combinar'])) {
    // Array con los nombres de los archivos HTML que quieres combinar
    $archivos = ['archivo1.html', 'archivo2.html', 'archivo3.html', 'archivo4.html'];

    // Archivo donde se almacenará la combinación
    $archivoCombinado = 'combinar.html';

    // Abre el archivo de salida en modo escritura
    $salida = fopen($archivoCombinado, 'w');

    // Itera a través de los archivos y escribe su contenido en el archivo combinado
    foreach ($archivos as $archivo) {
        $contenido = file_get_contents($archivo);
        fwrite($salida, $contenido);
    }

    // Cierra el archivo de salida
    fclose($salida);

    // Muestra el archivo combinado en el navegador
    header('Content-Type: text/html');
    readfile($archivoCombinado);
}

/*
<!DOCTYPE html>
<html>
<head>
    <title>Combinar archivos HTML</title>
</head>
<body>
    <form action="combinar.php" method="post">
        <input type="submit" name="combinar" value="Combinar Archivos">
    </form>
</body>
</html>
*/

?>


