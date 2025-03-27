<!DOCTYPE html>

<?php
session_start();
?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDAFTARAN PKL</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Form Pendaftaran PKL</h1>
    <form action="registerProses.php" method="post" enctype="multipart/form-data">

        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="n" name="nama" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="e" name="email" required><br><br>

        <label for="email">Password:</label><br>
        <input type="text" id="p" name="password" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jk" name="jenis_kelamin" value="L" required>Laki-laki
        <input type="radio" id="jk" name="jenis_kelamin" value="P" required>Perempuan<br><br><br>
        <!-- <select id="jk" name="jenis_kelamin" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br><br> -->

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="telepon">Telepon:</label><br>
        <input type="text" id="t" name="telepon" required><br><br>

        <input type="submit" name="register" value="Daftar PKL"><br><br>
        <label for="register">Sudah punya akun? <a href="login.php">Back to Login</a></label>

    </form>
</body>

</html>