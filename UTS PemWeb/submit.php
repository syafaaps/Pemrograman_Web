<?php
session_start();

// Simpan data dari formulir ke variabel session
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telepon'] = $_POST['telepon'];
$_SESSION['pesan'] = $_POST['pesan'];
$_SESSION['checkin'] = $_POST['checkin'];
$_SESSION['checkout'] = $_POST['checkout'];
$_SESSION['kamar'] = $_POST['kamar'];

// Kirim balasan sukses ke JavaScript
echo "Formulir berhasil dikirim!";
?>
