<?php
include 'db.php';

// Ambil nilai counter dari database
$result = $conn->query("SELECT clicks FROM counter WHERE id = 1");
$row = $result->fetch_assoc();
$clicks = $row['clicks'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Click Counter</title>
</head>
<body>
    <h1>Click Counter</h1>
    <p>Jumlah klik: <span id="count"><?php echo $clicks; ?></span></p>
    <form method="POST" action="counter.php">
        <button type="submit">Klik Saya</button>
    </form>
</body>
</html>
