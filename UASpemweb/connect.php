<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "uas_pemweb";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn){
    //echo "koneksi berhasil";
}

mysqli_select_db($conn, $db);
?>