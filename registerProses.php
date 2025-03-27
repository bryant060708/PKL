<?php
session_start();
include_once("database/koneksi.php"); //Mengambil koneksi database sekali proses di koneksi.php
$stmt = $conn->prepare("INSERT INTO nama_peserta (nama, email, password, jenis_kelamin, alamat, telepon) VALUES (:n, :e, :p, :jk, :a, :t)");
$stmt->bindParam(":n", $_POST['nama']);
$stmt->bindParam(":e", $_POST['email']);
$stmt->bindParam(":p", $_POST['password']);
$stmt->bindParam(":jk", $_POST['jenis_kelamin']);
$stmt->bindParam(":a", $_POST['alamat']);
$stmt->bindParam(":t", $_POST['telepon']);

$stmt->execute();

header("location:registrasiBerhasil.php");
