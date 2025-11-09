<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SIAKAD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Anda berhasil login ke Sistem Akademik.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
