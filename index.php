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
    <div align='center'>
        <h2>WELCOME (^_^)</h2>
        <p>Selamat Datang, anda telah login sebagai <b><?php echo $nama; ?></b></p>
        <br>
        <p><a href="homepage.php"><b>Back</b></a></p></br>
    </div>
</body>

</html>