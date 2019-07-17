<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("location: login.php");
}

include "../db/connection.php";

$id           = $_GET['id'];
$table        = $_GET['table'];
$url          = $_GET['url'];
$prevFeatured = 0;

if ($table == "activities" || $table == "news") {

    global $conn;
    $sql = $conn->prepare("SELECT id FROM $table WHERE featured=1");
    $sql->execute();
    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $prevFeatured = mysqli_fetch_object($rec)->id;
    }
    
    $sql = $conn->prepare(
        "UPDATE $table
            SET featured=0
            WHERE id = ?;
        "
    );
    $sql->bind_param('i', $prevFeatured);
    $sql->execute();

    $sql = $conn->prepare(
        "UPDATE $table
        SET featured=1
        WHERE id = ?;
        "
    );
    $sql->bind_param('i', $id);
    $sql->execute();

    header('Location: '.$url);
}

?>