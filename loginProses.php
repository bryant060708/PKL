<?php
session_start();
include_once("database/koneksi.php"); //Mengambil koneksi database sekali proses di koneksi.php
//$_SESSION['login'] = $_POST['nama'];

$email = $_POST['email']; //Ambil E-mail di Form Login
$pass = $_POST['password']; //Ambil Password di Form Login

$stmt = $conn->prepare("SELECT * FROM nama_peserta WHERE email=:e AND password=:p");
$stmt ->bindParam(":e", $_POST['email']);
$stmt ->bindParam(":p", $_POST['password']);
$stmt ->execute(); //Ekesekusi query
$hasil = $stmt->fetch(); //Ambil data query(stmt)

if(!empty($hasil)){ //Jika $hasil query tidak empty (kosong)
	$_SESSION['id'] = $hasil['id_peserta']; //Set session untuk login (simpan id dalam session login)
	$_SESSION['login'] = $hasil['nama']; //Set session untuk login (simpan email dalam session login)
	$_SESSION['p'] = $hasil['password']; //Set session untuk login (simpan email dalam session login)
	$_SESSION['e'] = $hasil['email']; //Set session untuk login (simpan email dalam session login)
	$_SESSION['jk'] = $hasil['jenis_kelamin']; //Set session untuk login (simpan email dalam session login)
	$_SESSION['a'] = $hasil['alamat']; //Set session untuk login (simpan email dalam session login)
	$_SESSION['t'] = $hasil['telepon']; //Set session untuk login (simpan email dalam session login)
	header("location: homepage.php"); //Langsung mengaarahkan (redirect) ke halaman homepage.php
}else{ //Jika $hasil querynya kosong
	header("location: loginGagal.php"); //Langsung mengaarahkan (redirect) ke halaman login.php
}

?>