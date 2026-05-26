<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Kevin_Akademik";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
