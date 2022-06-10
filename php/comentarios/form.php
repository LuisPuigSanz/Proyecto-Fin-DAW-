<?php


if(isset($_SESSION["userid"])){ //userid -> id del usuario en tabla usuarios
    echo "<form method='POST' action='".setComments($conn)."'class='row g-3 justify-content-center'> 
    <input type='hidden' name='uid' value='".$_SESSION["useruid"]."'>
    <input type='hidden' name='fecha' value='".date('Y-m-d H:i:s')."'>
    <textarea name='mensaje' placeholder='Escribe aquí tu comentario'></textarea><br>
    <button type='submit' name='commentSubmit' class='btn btn-primary ms-lg-3'>Enviar</button>
    <br><br>
    </form>";
}
else{
    echo "<br><br><h5>Debes estar loggeado para poder comentar <i class='bx bx-smile bx-spin' style='color:#d89d28' ></i></h5><br><br>";
}

    
    
    
?>

