<?php

date_default_timezone_set('Europe/Madrid');  //Zona Horaria
include '../../includes/dbh.inc.php'; //CONEXIÓN BBDD. Esto tiene que estar al principio
include 'coments.inc.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/coment.css">


    <title>Responder Comentario</title>
</head>

<body>

    <div class="caja-comentarios">

        <?php

            $nombreUsuarioConectado = $_SESSION['useruid'];
            $fechaActual = date('Y-m-d H:i:s');

            $mensajeDe = $_POST['uid'];
            $mensajeAntiguo = $_POST['mensaje'];
            $fechaAntiguoComentario = $_POST['fecha'];
    
    
            //la función setComments la tenemos en coments.inc.php
            echo "
                <div id='comentarioParaResponder' class='container'>
                    <a href='../../media/actualidad.php' style='color:purple; text-decoration:underline;'><- Volver</a><br><br>
                    <p class='text-secondary'>Hola ".$nombreUsuarioConectado."</p><br>
                    <p>Mensaje de &nbsp; <span class='text-primary'>".$mensajeDe."</span>&nbsp;&nbsp;&nbsp;(".$fechaAntiguoComentario.")<p class='text-primary'> ".$mensajeAntiguo.". <br><br><br>
                    
                    <form class='row g-4 justify-content-center' method='POST' action='" . replyComments($conn) . "' > 
                        <input type='hidden' name='nombreUsuarioConectado' value='" . $nombreUsuarioConectado . "'>
                        <input type='hidden' name='fechaActual' value='" . $fechaActual . "'>
                        <input type='hidden' name='mensajeDe' value='@ " . $mensajeDe . "'>
                        <textarea rows='6' name='msjReply' placeholder='Contesta a ".$mensajeDe."'></textarea><br>
                        <button type='submit' name='replica' class='btn btn-primary ms-lg-3'>Responder</button>
                    </form>
                </div>";
                
        ?>
    </div>
</body>

</html>