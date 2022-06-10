 <?php
   include_once("./php/nav.php");
   ?>

 <div class="container">

    <section class="signup-form col-md-5 mx-auto text-center">
       <h2>Acceder</h2><br>
       <form action="includes/acceder.inc.php" method="post" class="row g-3 justify-content-center">
          <input type="text" name="uid" placeholder="Usuario o Email...">
          <input type="password" name="pwd" placeholder="Contraseña...">
          <button type="submit" name="submit" class="btn btn-primary">Acceder</button>
       </form>

       <?php
         // mensajes de error
         if (isset($_GET['error'])) {
            if ($_GET["error"] == "emptyinput") {
               echo "<br><p style='color:red;'>Campos vacíos.</p>";
            } else if ($_GET["error"] == "wronglogin") {
               echo "<br><p style='color:red;'>Usuario o contraseña incorrectos.</p>";
            } else if ($_GET["error"] == "none") {
               echo "<br><p style='color:green;'>¡Registro con éxito!<P>";
            }
         }
         ?>
    </section>

 </div>

 <?php
   require_once("./php/footer.php");
   ?>