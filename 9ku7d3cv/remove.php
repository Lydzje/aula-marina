<?php

include "../db/connection.php";

$id    = $_GET['id'];
$table = $_GET['table'];
$url   = $_GET['url'];

global $conn;
$sql =
    "DELETE FROM $table WHERE id='$id'
    ";
$conn->query($sql);

header('Location: '.$url);

?>