<?php

//CONTROL ACCESO
if(isset($_POST["submit"])){

    //Cogemos la info de la url
    //Sea uid o email, la variable la llamamos usernamew
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //metemos la conexión y las funciones
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) { //Si no es falso, entonces lanza error y redirige. si es falso, es que está vacío.
        header("location: ../acceder.php?error=emptyinput"); //si el error es 'empty imput'->
        exit();
    }
    else{
        loginUser($conn, $username, $pwd);
    }
    
    
}

else{

    header("location: ../acceder.php");
    exit();
}