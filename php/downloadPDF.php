<?php

session_start();

if(!empty($_GET['file'])){

    $filename = basename($_GET['file']);
    $filepath = "../docs/".$filename;
    if(file_exists($filepath)){

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filepath);
        header("Location: ".$_SERVER["PHP_SELF"]);
        
    }
    else{
        echo "El archivo no existe <br>";
        echo "<a href='../media/sabermas.php' >Volver</a>";
    }
}


?>