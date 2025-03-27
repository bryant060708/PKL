<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['login'])) {
    header('location:index.php'); //Apabila sudah login akan diarahkan ke index.php
}
include_once("database/koneksi.php"); //Mengambil koneksi database sekali proses di koneksi.php
?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>LOGIN</h1>
    <form action="loginProses.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="e" name="email" required><br><br>

        <label for="password">password:</label><br>
        <input type="password" id="p" name="password" required><br><br>

        <input type="submit" name="login"><br><br>

        <label for="register">Belum punya akun? <a href="register.php">Register</a></label>
    </form>
</body>

</html>