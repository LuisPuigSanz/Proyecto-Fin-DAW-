<?php

session_start();
include ("dbh.inc.php");

if(isset($_SESSION['userid'])){

    
    $id = $_REQUEST['id'];

    $query = "DELETE FROM imagen WHERE id = '$id'";
    $resultado = $conn->query($query);
    
    if($resultado){
        echo "ok";
        header("Location: ../media/panelUsuario.php#galeria");
    }
    else{
        echo "NOT OK";
    }
}
else{
    header("Location: ../media/panelUsuario.php?eliminar=no#galeria");
}



?>