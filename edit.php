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
    <title>EDIT USER PKL</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Form Edit User PKL</h1>
    <form action="editProses.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">

        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="n" name="nama" value="<?php echo $_SESSION['login']; ?>" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="e" name="email" value="<?php echo $_SESSION['e']; ?>" required><br><br>

        <label for="email">Password:</label><br>
        <input type="text" id="p" name="password" value="<?php echo $_SESSION['p']; ?>" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jk" name="jenis_kelamin" value="L" <?php if ($_SESSION['jk'] == "L") {
            echo 'checked';
        } ?> required>Laki-laki
        <input type="radio" id="jk" name="jenis_kelamin" value="P" <?php if ($_SESSION['jk'] == "P") {
            echo 'checked';
        } ?> required>Perempuan<br><br><br>
        <!-- <select id="jk" name="jenis_kelamin" value="<?php echo $_SESSION['jk']; ?>" onclick="<?php echo $_SESSION['jk']; ?>">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br><br> -->

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?php echo $_SESSION['a']; ?>" required><br><br>

        <label for="telepon">Telepon:</label><br>
        <input type="text" id="t" name="telepon" value="<?php echo $_SESSION['t']; ?>" required><br><br>

        <input type="submit" name="edit" value="UPDATE"><br><br>
        <label for="back">Ingin Kembali? <a href="homepage.php">Back to HOME</a></label>

    </form>
</body>

</html>