<?php

session_start();
include 'dbh.inc.php'; //conexión
$userid = $_SESSION['userid'];
$userUid = $_SESSION['useruid'];


if(isset($_POST['submit']) && isset($_FILES['imagen'])){

    include 'dbh.inc.php'; //conexión

    //prueba para ver el archivo
    // echo "<pre>";
    // print_r($_FILES['imagen']);
    // echo "</pre>";

    $imgName = $_FILES['imagen']['name'];
    $imgSize = $_FILES['imagen']['size'];
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $error = $_FILES['imagen']['error'];
    $userUid = $_SESSION['useruid'];

    if($error === 0){

        //para que me suba el archivo en bits
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        if($imgSize >5000000){
            $em = "Lo sentimos. La imagen es demasiado grande...Max: 5MB";
            header("Location: ../media/panelUsuario.php?error=$em#galeria");
        }
        else{
            //extensión de la imagen
            $img_ex = pathinfo($imgName, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");

            if(in_array($img_ex_lc, $allowed_exs)){

                //INSERTAR EN EL DIRECTORIO
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = '../users/imagenes/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                //INSERTAR EN LA BD - ¡OJO COMILLAS!
                $sql = "INSERT INTO imagen (nombre, userId, imagen, userUid) VALUES ('$new_img_name', '$userid', '$imagen', '$userUid')";
                mysqli_query($conn,$sql);

                $em = "Imagen subida con éxito!";
                header("Location: ../media/panelUsuario.php?exito=$em#galeria");

            }else{
                $em = "Tipo de archivo inválido. Selecciona .jpg .jpeg .png";
                header("Location: ../media/panelUsuario.php?error=$em#galeria");
            }
        }
        
    }else{
        $em = "Error. Selecciona un archivo...";
        header("Location: ../media/panelUsuario.php?error=$em#galeria");
    }
}
else{
    $em = "Error. Selecciona un archivo...";
        header("Location: ../media/panelUsuario.php?error=$em#galeria");
}

?>