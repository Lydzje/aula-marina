<?php
include '../db/connection.php';

$conn->query("SET NAMES 'utf8'");

function verify_login($username, $password, &$result)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
        return 1;
    }
    return 0;
}


function getFeatureds(&$result){
    global $conn;
    $sql = "SELECT * FROM featureds WHERE id=1 OR id=2 OR id=3 OR id=4";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_array()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function updateFeatureds($id, $text, $link)
{
    global $conn;
    $sql =
        "UPDATE featureds
            SET text='$text', link='$link' 
            WHERE id = '$id';
        ";
    $rec = $conn->query($sql);
}


function getSpecies(&$result){
    global $conn;
    $sql = "SELECT * FROM species";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}


function getActivities($past, &$result){
    global $conn;
    $sql = "SELECT * FROM activities WHERE past='$past'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}


function getProyects(&$result){
    global $conn;
    $sql = "SELECT * FROM proyects";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}


function getPeople($main, &$result){
    global $conn;
    $sql = "SELECT * FROM people WHERE main='$main'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}


function getFacilitiesInfo(&$result){
    global $conn;
    $sql = "SELECT * FROM facilities WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateFacilities($description)
{
    global $conn;
    $sql =
        "UPDATE facilities
            SET description='$description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getAboutUsInfo(&$result){
    global $conn;
    $sql = "SELECT * FROM aboutUs WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateAboutUs($description)
{
    global $conn;
    $sql =
        "UPDATE aboutUs
            SET description='$description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getNews(&$result){
    global $conn;
    $sql = "SELECT * FROM news";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}


function getContactInfo(&$result){
    global $conn;
    $sql = "SELECT * FROM contact WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateContact($phone, $email, $hour, $address, $description)
{
    global $conn;
    $sql =
        "UPDATE contact
            SET phone='$phone', email='$email', hour='$hour', address='$address', description='$description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}
