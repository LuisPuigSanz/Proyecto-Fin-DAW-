<?php

// CONECTAR BBDD
$conn = mysqli_connect('localhost','root','','bdproyecto');

//Si no conecta...
if(!$conn){
    //Kill conection
    die("Conexión fallida: ".mysqli_connect_error());
}