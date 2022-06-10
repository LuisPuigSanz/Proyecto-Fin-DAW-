<?php
include_once("./php/nav.php");
?>

<div class="container">

    <section class="signup-form col-md-5 mx-auto text-center">
        <h2>Registrarse</h2><br>
        <form action="includes/registro.inc.php" method="post" class="row g-3 justify-content-center">
            <input type="text" name="name" placeholder="Nombre Completo...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Contraseña...">
            <input type="password" name="pwdrepeat" placeholder="Repite contraseña...">
            <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
        </form>

        
        <?php
        // mensajes de error
        if (isset($_GET['error'])) {
            $error="";
            if ($_GET["error"] == "emptyinput") {
                $error.= "<br><p style='color:red;'>Completa todos los campos.</p>";
            } else if ($_GET["error"] == "invalidemail") {
                $error.= "<br><p style='color:red;'>Elige un email correcto.</p>";
            } else if ($_GET["error"] == "invaliduid") {
                $error.= "<br><p style='color:red;'>El usuario no está disponible.</p>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                $error.= "<br><p style='color:red;'>Las contraseñas no coinciden.</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                $error.= "<br><p style='color:red;'>Algo fue mal, vuelve a intentarlo.</p>";
            } else if ($_GET["error"] == "none") {
                $error.= "<br><h5 style='color:green;'>¡Registro con éxito!<h5>";
            }
            echo $error;
        }
        ?>
    </section>

</div>



<?php
require_once("./php/footer.php");
?>