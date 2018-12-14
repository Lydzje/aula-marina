<?php
include '../db/connection.php';

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
