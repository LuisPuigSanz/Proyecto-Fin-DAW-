<?php

//CONTROL ACCESO
session_start();
require_once 'dbh.inc.php';


if (isset($_POST["userStats"])) {

    $username = $_POST["user"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    // $sql = "SELECT * FROM imagen WHERE userUid='$userUid'";
    // $sql2 = "SELECT * FROM coments WHERE uid='$userUid'";

    $sql = "SELECT * FROM imagen WHERE userUid = '$username'";
    $sql2 = "SELECT * FROM coments WHERE uid = '$username'";

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    $rowImg = mysqli_num_rows($result);
    $rowComents = mysqli_num_rows($result2);

    // email=$email_address&event_id=$event_id";

    header("Location: ../media/panelAdmin.php?coments=" . $rowComents . "&imgs=" . $rowImg);
    exit();
    
} else {

    header("location: ../media/panelAdmin.php?datos=no");
    exit();
}
