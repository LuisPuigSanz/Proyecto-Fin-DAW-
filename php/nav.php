<?php

date_default_timezone_set('Europe/Madrid');  //Zona Horaria
include './includes/dbh.inc.php'; //CONEXIÓN BBDD. Esto tiene que estar al principio
include './php/comentarios/coments.inc.php';
session_start(); //Comenzamos una sesión.
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Tags Requeridos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/coment.css">
    
    
    <script src="./js/jquery/jquery-3.6.0.min.js"></script>
    <!-- TÍTULO -->
    <title>Kreatics</title>
</head>

<!-------------------- BARRA NAV ---------------------------->
<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
    <div class="container">


        <a class="navbar-marca" href="index.php">
            <img class="logo" src="img/logo negro.png" style="height: 60px;" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- TEORÍA
                navbar-collapse - para agrupar y ocultar el contenido de la barra de navegación por un punto de interrupción principal.
                m - for classes that set margin
                s - (start) for classes that set margin-left or padding-left in LTR, margin-right or padding-right in RTL -->

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#destacados">Destacados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#proyectos">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#precios">Precios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#equipo">Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#blog">Blog</a>
                </li>
                <?php
                //control acceso
                if (isset($_SESSION["userid"])) {
                    echo "<li class='nav-item'><a class='nav-link text-center text-primary' href='media/panelUsuario.php' >" . $_SESSION["useruid"] . "</a></li>";
                    echo "<li class='nav-item'><a class='nav-link text-center text-warning' href='includes/cerrarsesion.inc.php' >Cerrar Sesión</a></li>";
                }
                
                else {
                    echo "<li class='nav-item'><a class='nav-link text-center text-primary' href='acceder.php' >Acceder</a></li>";
                    echo "<li class='nav-item'><a class='nav-link text-center text-info' href='registro.php' >Registro</a></li>";
                }
                
                ?>
                <li class="nav-item">
                    <a href="index.php#contacto"><button class="btn btn-primary ms-lg-3">Contacto</button></a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!----- //NAVBAR ----->