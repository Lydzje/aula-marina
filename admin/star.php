<?php
include "../db/connection.php";

$id           = $_GET['id'];
$table        = $_GET['table'];
$url          = $_GET['url'];
$prevFeatured = 0;

global $conn;
$sql = 
    "SELECT id FROM $table WHERE featured=1
    ";
$rec = $conn->query($sql);
if ($rec->num_rows > 0) {
    $prevFeatured = mysqli_fetch_object($rec)->id;
}

$sql = 
    "UPDATE $table
    SET featured=0
    WHERE id = '$prevFeatured';
    ";
$conn->query($sql);

$sql = 
    "UPDATE $table
    SET featured=1
    WHERE id = '$id';
    ";
$conn->query($sql);

header('Location: '.$url);

?>