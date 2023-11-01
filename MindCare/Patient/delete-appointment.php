<?php
session_start();

if (isset($_SESSION["user"])) {
    if ($_SESSION["user"] == "" or $_SESSION['usertype'] != 'p') {
        header("location: login.php");
    }
} else {
    header("location: login.php");
}

if (isset($_GET["id"])) {
    // Import database
    include("connection.php");
    $id = $_GET["id"];

    $sql = $database->prepare("delete from appointment where appoid = ?");
    $sql->bind_param("i", $id);
    $sql->execute();

    header("location: appointment.php");
}
?>
