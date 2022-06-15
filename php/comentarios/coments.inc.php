<?php




function setComments($conn)
{
    // A menos que tengamos una variable específica ( commentSubmit, (botón enviar) ) muestres el mensaje.
    if (isset($_POST['commentSubmit'])) {

        $uid = $_POST['uid'];
        $fecha = $_POST['fecha'];
        $mensaje = $_POST['mensaje'];

        //Inserta en BBDD
        $sql = "INSERT INTO coments (uid, fecha, mensaje) VALUES ('$uid', '$fecha', '$mensaje')";
        $conn->query($sql);
    }
}



function getComments($conn)
{
    $sql = "SELECT * FROM coments";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {

        

        //MOSTRAR MENSAJES
        echo "<div class='container'>
            <div class='comment-box'>
            <p>";
           
        echo "<span class='text-danger'>&nbsp;&nbsp;" . $row['respuesta_de'] . "</span>";
        echo "<h6><i class='bx bxs-user' style='color:#257bd0'  ></i>&nbsp;&nbsp;" . $row['uid'] . "</h6>";
        echo $row['fecha'] . "<br><br>";
        echo nl2br($row['mensaje']) . "</p>"; //nl = new line   2br = 2x <br> 
        


        //EDITAR y ELIMINAR:
        //mostramos los botones
        if (isset($_SESSION['userid'])) {
            if ($_SESSION['useruid'] == $row['uid']) {
                //Botón eliminar:
                echo "       
                <form class='delete-form' method='POST' action='" . deleteComments($conn) . "'>
                <input type='hidden' name='cid' value='" . $row['cid'] . "'>
                <button name='commentDelete'>Eliminar</button>
                </form>";

                //Botón Editar:
                echo "
                <form class='edit-form' method='POST' action='../php/comentarios/editcomment.php' >
                <input type='hidden' name='cid' value='" . $row['cid'] . "'>
                <input type='hidden' name='uid' value='" . $row['uid'] . "'>
                <input type='hidden' name='fecha' value='" . $row['fecha'] . "'>
                <input type='hidden' name='mensaje' value='" . $row['mensaje'] . "'>
                <button name='editComment'>Editar</button>
                </form>";
            } else {
                //Botón respuesta:
                echo "       
                <form class='reply-form' method='POST' action='../php/comentarios/replycomment.php'>
                    <input type='hidden' name='uid' value='" . $row['uid'] . "'>
                    <input type='hidden' name='fecha' value='" . $row['fecha'] . "'>
                    <input type='hidden' name='mensaje' value='" . $row['mensaje'] . "'>
                    <button name='commentReply' value='commentReply'>Responder</button>
                </form>";
            }
        } else {
            //No puedes responder si no estás loggeado.
            echo "<p class='responderMensaje'>No puedes responder</p>";
        }
        echo "</div>
        </div>";
    }
}



function editComments($conn)
{
    // A menos que tengamos una variable específica ( commentSubmit, (botón enviar) ) muestres el mensaje.
    if (isset($_POST['commentSubmit'])) {
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $fecha = $_POST['fecha'];
        $mensaje = $_POST['mensaje'];

        //ACTUALIZA la BBDD
        $sql = "UPDATE coments SET mensaje='$mensaje' WHERE cid='$cid'";
        $conn->query($sql);
        header("Location: ../../media/actualidad.php#formularioComentarios");
        die;
    }
}

function deleteComments($conn)
{

    if (isset($_POST['commentDelete'])) {
        $_SESSION['useruid'];
        $cid = $_POST['cid'];

        //ELIMINA de la BBDD
        $sql = "DELETE FROM coments WHERE cid='$cid'";
        $conn->query($sql);
        // header("Location: actualidad.php");
        // die;
    }
}


function replyComments($conn)
{

    if (isset($_POST['replica'])) {

        $usuario = $_SESSION['useruid'];
        $fecha = date('Y-m-d H:i:s');

        $mensaje = $_POST['msjReply'];
        $respuesta_de =$_POST['mensajeDe'];

        //Inserta en BBDD
        $sql = "INSERT INTO coments (uid, fecha, mensaje, respuesta_de) VALUES ('$usuario', '$fecha', '$mensaje', '$respuesta_de')";
        $conn->query($sql);
        header("Location: ../../media/actualidad.php#formularioComentarios");
        die;
    }
}

function getLogin($conn)
{
    if (isset($_POST['loginSubmit'])) {
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM usuario WHERE uid='$uid' AND pwd='$pwd'";
        $result = $conn->query($sql);


        if (mysqli_num_rows($result) > 0) {
            if ($row = $result->fetch_assoc()) {

                //nombramos variable de sesión -> debe ser única
                //le asociamos el valor del id de nuestra bbdd para que no se repita
                $_SESSION['id'] = $row['id'];
                // header("Location:".$_SERVER['PHP_SELF']."?loginsucces");
                // exit();
            }
        } else {
            // header("Location: ../media/actualidad.php?loginfailed");
            // exit();
        }
    }
}

function userLogout($conn)
{
    if (isset($_POST['logoutSubmit'])) {
        session_start();
        session_destroy();
        // header("Location: ../media/actualidad.php?loginfailed");
        // exit();
    }
}
