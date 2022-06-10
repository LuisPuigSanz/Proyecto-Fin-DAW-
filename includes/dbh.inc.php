<?php //NO cerramos la etiqueta ya que si después de ? > ponemos un espacio, va a fallar.

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "bdproyecto";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

// Errores
if (!$conn) {
    die("Conexión a la base de datos fallida: ".mysqli_connect_error());   
}