<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda PHP</title>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['usersesi'])) {
    header('Location: lat7-loginsesion.php');
    exit();
}
?>

<h1>WELCOME</h1>
<h2>WELCOME <mark><?= $_SESSION['usersesi']; ?></mark></h2>

<form method="post">
    <input type="submit" name="logout" value="Logout">
</form>

<?php
if (isset($_POST['logout'])) {
    unset($_SESSION['usersesi']);   // menghapus session login
    // atau bisa menggunakan session_destroy();

    header('Location: lat5-login.php');
    exit();
}
?>

</body>
</html>