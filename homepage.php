<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    //Jika user belum login maka akan diarahkan di login.php
} else {
    $nama = $_SESSION['login'];
    //Untuk mencantumkan nama session di halaman sukses login di index.php
}
?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE PKL</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>HOMEPAGE</h1>
    <form action="logoutProses.php" method="post">
        <?php echo "Selamat Datang <b>" . $_SESSION['login'] . "</b><br><br>"; ?>
        <input type="submit" name="logout" value="LogOut">
    </form>
    <form action="" method="POST">
        <label for="edit" name="edit">Edit akun? <a href="edit.php">Edit</a></label><br>
        <label for="delete" name="delete">Hapus akun? <a href="deleteProses.php">Delete</a></label><br>
    </form>
</body>

</html>