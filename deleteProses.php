<?php
session_start();
$e = $_SESSION['e'];
include_once("database/koneksi.php"); //Mengambil koneksi database sekali proses di koneksi.php

// $stmt = $conn->prepare("DELETE FROM nama_peserta WHERE id_peserta = :id");
$stmt = $conn->prepare("DELETE FROM nama_peserta WHERE email = :e");
$stmt->bindParam(":e", $e);
$stmt->execute();

header("location:deleteBerhasil.php");
