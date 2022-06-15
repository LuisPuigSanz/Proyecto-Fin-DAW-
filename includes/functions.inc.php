<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{

    // $result;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true; //Si hay un error -> verdadero
    } else {
        $result = false;
    }
    return $result;
}




function invalidUid($username)
{

    // $result;
    //Esta función: escribimos un parámetro, y si no coincide, lanza error -> algoritmo de búsqueda
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true; //Si hay un error -> verdadero
    } else {
        $result = false;
    }
    return $result;
}





function invalidEmail($email)
{
    // $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //si es un email válido, devuelve true. Pero le ponemos ! para que devuelva falso
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}





function pwdMatch($pwd, $pwdRepeat)
{
    // $result;

    //queremos comprobar que coinciden
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}




function uidExists($conn, $username, $email)
{
    //Lo primero que necesitamos es conectar a la BD para comprobar si el usuario ya ha sido creado
    $sql = "SELECT * FROM usuarios WHERE userUid = ? OR userEmail = ?;";

    //Tenemos que hacer la query correctamente:
    //Esto lo hacemos por seguridad, ya que si escriben código en el input de registro, podrían destruir nuestra bbdd o cambiarla.
    //Por tanto , preparamos declaraciones previas
    //Esto prevendrá que se pueda insertar código en el input
    $stmt = mysqli_stmt_init($conn); //iniciamos declaración -> stmt(statement)

    if (!mysqli_stmt_prepare($stmt, $sql)) {  //corre la declaración $sql dentro de la bbdd y busca algún error $stmt
        header("location: ../registro.php?stmtfailed"); //la declaración falló
        exit();
    }

    //Si no hay fallo, pasamos la info del usuario:
    mysqli_stmt_bind_param($stmt, "ss", $username, $email); //1. Declaración preparada  2.Tipo de dato->string(ss = 2 strings)
    //Ahora ya hemos vinculado la info del usuario a la declaración, y ejecutamos:
    mysqli_stmt_execute($stmt);
    //Ahora queremos coger el resultado de la BD porque lo que estamos haciendo es coger datos. 
    //Si cogemos datos de un usurio -> ESTO SIGNIFICA que el usuario EXITE
    $resultData = mysqli_stmt_get_result($stmt); // Aquí, cogemos los resultados de la declaración que hemos ejecutado.
    //Ahora, chequeamos si hay un resultado:
    // **IMPORTATE**
    if ($row = mysqli_fetch_assoc($resultData)) { //Array Asociativo que se asigna a $row, que devuelve TRUE si hay datos y FALSE, si no.
        // Si es True, esos DATOS los USAMOS para el LOGIN (acceso)
        return $row;
    } else {
        // Si no hay datos, false.
        $result = false;
        return $result;
    }

    //Cerramos la declaración
    mysqli_stmt_close($stmt);
}



function createUser($conn, $name, $email, $username, $pwd)
{
    //Insertar en BBDD
    // ? placeholders
    $sql = "INSERT INTO usuarios (userName, userEmail, userUid, userPwd) VALUES (?,?,?,?);";

    //Iniciamos declaración:
    $stmt = mysqli_stmt_init($conn); //iniciamos declaración -> stmt(statement)

    //Comprobamos si es posible:
    if (!mysqli_stmt_prepare($stmt, $sql)) {  //corre la declaración $sql dentro de la bbdd y busca algún error $stmt
        header("location: ../registro.php?stmtfailed"); //la declaración falló
        exit();
    }

    // ***** SEGURIDAD ******  para hacerlo ilegible.
    //hacemos picadillo la password - simbolos
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //Si no hay fallo, pasamos la info del usuario:     (ssss = 4 stirngs)
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);

    //Ejecutar declaración:
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registro.php?error=none");
    exit();
}






// -------------------------- funciones para el ACCESO (login) -----------------------------------

function emptyInputLogin($username, $pwd)
{

    // $result;
    if (empty($username) || empty($pwd)) {
        $result = true; //Si hay un error -> verdadero
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd)
{

    //PRIMERO comprobamos que el usuario o el email, existe en la BD
    $uidExists = uidExists($conn, $username, $username); //metemos 2 username ya que podemos acceder por username o email

    // -- Gestión Errores --
    if ($uidExists === false) {
        header("location: ../acceder.php?error=wronglogin");
        exit();
    }

    // -- chequear la pwd --        $uidExists es un array asociativo, podemos nombrar una columna de la bbdd
    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed); //Si coinciden -> True    Si no, False

    if ($checkPwd === false) { //si es falso, no coinciden las pwds
        header("location: ../acceder.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {    //Si accede correctamente, INICIAMOS SESIÓN y mandamos a la página principal
        session_start();
        $_SESSION["userid"] = $uidExists["userId"]; //id usuario tabla
        $_SESSION["useruid"] = $uidExists["userUid"]; //alias/nombre usuario en tabla
        $_SESSION["pwd"] = $checkPwd["userPwd"];

        $usuario = $_SESSION["useruid"];
        $pwd = $_SESSION["pwd"];
        setcookie('user', $usuario, time() + 3600);
        setcookie('pwd', $pwd, time() + 3600);


        header("location: ../index.php");
        exit();
    }
}


// ------------------------------- ESTADÍSTICAS USUARIO -------------------------------
function showStats($conn, $username)
{

    require_once 'dbh.inc.php';
    // $sql = "SELECT * FROM imagen WHERE userUid='$userUid'";
    // $sql2 = "SELECT * FROM coments WHERE uid='$userUid'";ç

    $sql = "SELECT * FROM imagen WHERE userUid = '$username'";
    $sql2 = "SELECT * FROM coment WHERE userUid = '$username'";

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    $rowImg = mysqli_num_rows($result);
    $rowComents = mysqli_num_rows($result2);

    // email=$email_address&event_id=$event_id";

    header("Location: ../media/panelAdmin.php?coments=" . $rowComents . "&imgs=" . $rowImg);
    exit();
}
