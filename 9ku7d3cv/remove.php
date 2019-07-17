<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("location: login.php");
}

include "../db/connection.php";

$id    = $_GET['id'];
$table = $_GET['table'];
$url   = $_GET['url'];

if ($table == "species" ||
    $table == "activities" || 
    $table == "projects" ||
    $table == "sections" ||
    $table == "people" ||
    $table == "news") {
    global $conn;
    $sql = $conn->prepare("DELETE FROM $table WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();
    
    header('Location: '.$url);
}
?>