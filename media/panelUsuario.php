<?php
include_once("../php/nav2.php");


//CONTROL DE ACCESO

if( isset($_SESSION['userid']) && $_SESSION['userid'] == 6){

    header("Location: panelAdmin.php");

}

if (isset($_SESSION["useruid"])) {


    $idUsuario = $_SESSION['userid'];

    if ($conn) {
        $consulta = "SELECT * FROM usuarios WHERE userId= $idUsuario";
        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $nombre = $fila['userName'];
                $email = $fila['userEmail'];
                $usuario = $fila['userUid'];
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}

?>

<section>

    <!-- datos usuario -->
    <div class="container ">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h6 class="text-primary">PANEL USUARIO</h6>
                <h1>Hola <?php echo $_SESSION['useruid']; ?><i class='bx bx-smile' style='color:#d4ae33'></i></h1>
                <p>Aquí encontrarás todos tus datos personales y podrás almacenar lo que necesites para tu proyecto.</p>
            </div>
        </div>
        <div class="row g-4">
            <h4 class="text-primary">Datos personales:</h4>
            <h5>Nombre Completo:&nbsp;&nbsp; <span class="text-secondary"><?php echo $nombre ?></span></h5>
            <h5>Email: &nbsp;&nbsp; <span class="text-secondary"><?php echo $email ?></span></h5>
            <h5>Nombre usuario:&nbsp;&nbsp; <span class="text-secondary"><?php echo $usuario ?></span></h5>
            <h5>Lugar de conexión: &nbsp;&nbsp; <span id="lugar" class="text-secondary"></span></h5>
            <div class="container">
                <div id="mapa">
                    <span class="mensaje">Da click en el botón para indicarte tu ubicación</span>
                </div>
                <br>
                <a class="ubicar text-primary" href="" title="">Encuentra mi ubicación</a>
                <div id="resultados">
                    <span class="longitud"></span><br>
                    <span class="latitud"></span><br>
                </div>
            </div>
            <!-- geolocalización -->
            <script src="../js/location.js"></script>

        </div>
        <hr>
        <div class="row g-4" id="galeria">
            <div class="row g-4">
                <div class="containerSubirImg">
                    <!-- subir imagen -->
                    <h4 class="text-primary">Galería:</h4>
                    <form action="../includes/uploadimage.inc.php" method="POST" enctype="multipart/form-data">
                        Subir imagen... <br>
                        <input type="file" name="imagen" /><br><br>
                        <input type="hidden" name="useruid" value="<?php echo $_SESSION['useruid'];?>">
                        <input type="submit" value="Subir" name="submit" class="btn me-2 btn-primary" />
                    </form>
                </div>

                <?php
                //ERROR / EXITO
                if (isset($_GET["error"])) {
                    echo "<br><p class='container text-danger' id='errorUpload'>" . $_GET['error'] . "</p>";
                }
                if (isset($_GET["exito"])) {
                    echo "<br><p class='container text-success' id='exitoUpload'>" . $_GET['exito'] . "</p>";
                }
                ?>
                <br><br>
                <div id="mostrarGaleria" class="container">
                    <script src="../js/main.js"></script>

                    <?php
                    include('../includes/viewImg.inc.php'); ?>
                    
                </div>
            </div>


        </div>
    </div>

</section>


<?php
require_once("../php/footer2.php");
?>