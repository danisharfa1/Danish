<?php
$host = "sqlXXX.epizy.com"; // Ganti dengan host dari InfinityFree
$user = "epiz_12345678";    // Ganti dengan username kamu
$pass = "passwordkamu";     // Ganti dengan password kamu
$db   = "epiz_12345678_db"; // Ganti dengan nama DB kamu

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
