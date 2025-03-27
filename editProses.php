<?php
session_start();
$id = $_SESSION['id'];
include_once("database/koneksi.php"); //Mengambil koneksi database sekali proses di koneksi.php

$stmt = $conn->prepare("UPDATE nama_peserta SET nama = :n, email = :e, password = :p, jenis_kelamin = :jk, alamat = :a, telepon = :t WHERE id_peserta = :id");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":n", $_POST['nama']);
$stmt->bindParam(":e", $_POST['email']);
$stmt->bindParam(":p", $_POST['password']);
$stmt->bindParam(":jk", $_POST['jenis_kelamin']);
$stmt->bindParam(":a", $_POST['alamat']);
$stmt->bindParam(":t", $_POST['telepon']);

$stmt->execute();

header("location:editBerhasil.php");
