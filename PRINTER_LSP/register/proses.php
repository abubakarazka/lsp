<?php
require '../functions.php';

function tambahUser($data)
{
    global $conn;

    $name = $data["nama_lengkap"];
    $username = $data["username"];
    $password = $data["password"];
    $roles = $data["roles"];

    $query = "INSERT INTO user VALUES(NULL,'$name', '$username', '$password', '', '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
