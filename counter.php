<?php
include 'db.php';

// Tambah 1 ke jumlah klik
$conn->query("UPDATE counter SET clicks = clicks + 1 WHERE id = 1");

// Kembali ke halaman utama
header("Location: index.php");
exit();
?>
