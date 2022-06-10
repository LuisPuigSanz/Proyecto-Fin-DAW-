<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $categ = $_POST['serviciosSeleccion'];
    $mailFrom = $_POST['email'];    
    $message = $_POST['message'];


    $mailTo = "luisps1991@gmail.com";
    
    $headers = "From: ".$mailFrom;
    $txt = "Has recibido un e-mail de ".$name.".\n\n Categoría: ".$categ."\n\n Mensaje: ".$message;

    //mail(to,subject,message,headers,parameters);

    mail($mailTo, $subject, $txt, $headers);

    header("Location: ../../index.php");
    

}
