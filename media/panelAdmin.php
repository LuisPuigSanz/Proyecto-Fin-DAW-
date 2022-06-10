<?php
include_once("../php/nav2.php");

if (!isset($_SESSION['userid']) && $_SESSION['userid'] != 6) {

    header("Location: ../index.php");
    exit();
}
?>

<script>
    window.onload = function() {
        document.getElementById('eliminarUsuario').style.display = 'none';
        document.getElementById('userpanel').style.display = 'none';
        // document.getElementById('datosUsuario').style.display = 'none';
    };

    // JQUERY
    $(document).ready(function() {
        $("#btnDelUser").click(function() {
            $("#eliminarUsuario").show();
            $("#preEliminarUsuario").hide();
        });
    });
    $(document).ready(function() {
        $("#btnAdminUser").click(function() {
            $("#userpanel").show();
            $("#datosUsuario").show();
            $("#preAdminUser").hide();

        });
    });
</script>

<div class="container">
    <div class="row mb-5">
        <!-- titulo -->
        <div class="col-md-8 mx-auto text-center">
            <br><br>
            <h5 class="text-primary">PANEL ADMINISTRADOR</h5>
            <br><br>

        </div>

        <!-- sección -->
        <div class="row g-4">
            <h4 class="text-primary">Administrar USUARIOS</h4>

            <!------ eliminar usuario ------->
            <div id="USUARIO">

                <div id="preEliminarUsuario">
                    <button class="btn me-2 btn-primary" id="btnDelUser" onclick="showFormDelUser()">ELIMINAR USUARIO</button>
                    <br>
                </div>

                <div id="eliminarUsuario">
                    <p>Eliminar Usuario:</p>

                    <form action="../includes/adminUser.inc.php" method="POST" id="adminForm">
                        <label for="deluser">Usuario:</label>
                        <input type="text" name="deluser" placeholder="">
                        <button class="me-2 btn-primary" type="submit" name="btndelete">Eliminar</button>
                    </form>

                    <br>
                </div>

                <div id="mensajeDelete">
                    <?php if (isset($_GET["error"]) == "no") {
                        echo "<p class='text-success'>Usuario eliminado de la base de datos</p>";
                    }
                    if (isset($_GET["error"]) === "si") {
                        echo "<p class='text-danger'>Ha ocurrido un error.</p>";
                    }
                    if (isset($_GET["entra"]) == "si") {
                        echo "<p class='text-warning'>Ha entrado.</p>";
                    }

                    ?>
                </div>
            </div>

            <!------ admin usuario ------->
            <div id="PANEL">
                <div id="preAdminUser">
                    <button class="btn me-2 btn-primary" id="btnAdminUser">DATOS USUARIO</button>
                </div>

                <div id="userpanel">
                    <p>Estadísticas Usuario:</p>
                    <form action="../includes/userStats.inc.php" method="post" id="adminForm">
                        <label for="name">Usuario:</label>
                        <input type="text" name="user" placeholder="">
                        <button class="me-2 btn-primary" type="submit" name="userStats">Acceder</button>
                    </form>
                    <?php if (isset($_GET["user"]) == "no") {
                        echo "<p class='text-success'>No existe tal usuario.</p>";
                    } ?>
                </div>
                <div id="datosUsuario"><br><br>
                    <?php


                    if (isset($_GET['coments'])) {
                        $numCom = $_GET['coments'];
                        echo "<h6 class='text-primary'>Nº Comentarios Posteados:<h5 class=''>" . $numCom . "</h5></h6>";
                    }
                    if (isset($_GET['imgs'])) {
                        $numImg = $_GET['imgs'];
                        echo "<h6 class='text-primary'>Nº Imágenes Subidas:<h5 class=''>" . $numImg . "</h5></h6>";
                    }
                    if (isset($_GET['datos']) == 'no') {
                        echo "<h6 class='text-danger'>Error.</h6>";
                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- sección -->
    </div>

</div>








<?php
require_once("../php/footer2.php");
?>