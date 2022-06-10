<?php

//-------------------- CONTROL DE ACCESO -----------------------------
if (isset($_POST["submit"])) {
    // echo "Entrada correcta";

    //Si han entrado correctamente...cogemos los datos del POST
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //------------------- CONTROL ERRORES DE REGISTRO -----------------
    // INPUT VACÍO:
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) { //cualquier cosa menos falso, entonces lanza error
        header("location: ../registro.php?error=emptyinput"); //si el error es 'empty imput'->
        exit();
    }
    // Usuario inválido:
    if (invalidUid($username) !== false) {
        header("location: ../registro.php?error=invaliduid");
        exit();
    }
    // Email inválido:
    if (invalidEmail($email) !== false) {
        header("location: ../registro.php?error=invalidemail");
        exit();
    }
    // Pwd inválida:
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../registro.php?error=poasswordsdontmatch");
        exit();
    }
    //Usuario ya existe:
    if (uidExists($conn, $username, $email) !== false) {  //pasamos la conexión, por que necesitamos comprobar si existe
        header("location: ../registro.php?error=usernametaken");
        exit();
    }

    
    createUser($conn, $name, $email, $username, $pwd);


} else {
    header("location: ../registro.php");
}
