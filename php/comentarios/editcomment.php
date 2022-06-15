<?php
date_default_timezone_set('Europe/Madrid');  //Zona Horaria
include 'dba.inc.php'; //CONEXIÓN BBDD. Esto tiene que estar al principio
include 'coments.inc.php';

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


    <title>Editar Comentario</title>
</head>

<body>

    <div class="caja-comentarios">

        <?php
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $fecha = date('Y-m-d H:i:s');
        $mensaje = $_POST['mensaje'];


        //la función setComments la tenemos en coments.inc.php
        echo "<form class='row g-4 justify-content-center' method='POST' action='" . editComments($conn) . "' > 
            <input type='hidden' name='cid' value='" . $cid . "'>
            <input type='hidden' name='uid' value='" . $uid . "'>
            <input type='hidden' name='fecha' value='" . $fecha . "'>
            <textarea name='mensaje'>" . $mensaje . "</textarea><br>
            <button type='submit' name='commentSubmit' class='btn btn-primary ms-lg-3'>Editar</button>
            </form>";
        ?>
    </div>
</body>

</html>