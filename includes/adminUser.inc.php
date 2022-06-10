<?php

include 'dbh.inc.php';
session_start();

//CONTROL ACCESO
if (isset($_POST["btndelete"])) {


    // PRUEBA ERRORES
    if (isset($_POST["deluser"])) {

        // header("Location: ../media/panelAdmin.php?entra=si");
        // exit();

        $username = $_POST["deluser"];

        $consulta = "DELETE FROM usuarios WHERE userUid = '$username'";
        $consulta2 = "DELETE FROM imagen WHERE userUid = '$username'";

        $resultado = $conn->query($consulta);
        $resultado2 = $conn->query($consulta2);


        header("Location: ../media/panelAdmin.php?error=no");
        exit();
    }
    
}


