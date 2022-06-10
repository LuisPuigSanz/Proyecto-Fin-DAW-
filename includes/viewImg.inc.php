<table class="tabla">
    <thead>
        <tr >
            <th colspan="3">
                <h6 class="text-primary">Mis Imágenes <br><br><br></h6>
            </th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include("dbh.inc.php");
        $userId = $_SESSION['userid'];

        $query = "SELECT * FROM imagen WHERE userId = '$userId'";
        $resultado = $conn->query($query);


        while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr clospan="3">
                <td><?php echo $row['nombre']; ?></td>
                <td><div class="contImg"><img class="imagenTabla" id="<?php echo $row['id'];?>" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']) ;?> "/></div> </td>
                <td class="td-type-icon"><a href='../includes/eliminar.inc.php?id=<?php echo $row['id'];?>'><i class='bx bx-message-square-x'></i></a></td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>