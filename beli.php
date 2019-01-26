<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    
}

$id_produk = $_GET['id'];

if (isset($_SESSION['keranjang'][$id_produk])) 
{
	$_SESSION['keranjang'][$id_produk]+=1;
}
else
{
	$_SESSION['keranjang'][$id_produk] = 1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

echo "<script>alert('Produk Anda Telah Masuk ke Keranjang Belanja');</script>";
echo "<script>location='index.php?halaman=keranjang';</script>";

?>