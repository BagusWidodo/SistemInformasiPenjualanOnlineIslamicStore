<?php session_start();
//Aktifkan session
require '../config/koneksi.php'; 

if (!isset($_SESSION['admin'])) {
    echo "<script>location='login.php';</script>";
    
}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>SI - Penjualan Online</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="../Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
</head>

<body style="font-family:'Cambria';">

    <nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><b>ISLAMIC Store</b></a>
        </div>

        <div>
            <ul class="nav navbar-nav">
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="index.php?halaman=produk">Data Produk</a></li>
                <li><a href="index.php?halaman=terjual">Produk Terjual</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>

<br><br><br><br>
<div class="fuild-container">
    <?php
    if (isset($_GET['halaman'])) 
    {
        if ($_GET['halaman']=="produk")
        {
            include 'produk.php';
        }
        elseif ($_GET['halaman']=="terjual") 
        {
            include 'terjual.php';
        }
        elseif ($_GET['halaman']=="stok") 
        {
            include 'stok.php';
        }
        elseif ($_GET['halaman']=='tambah_produk') {
            include 'tambah_produk.php';
        }
        elseif ($_GET['halaman']=='delete_produk') {
            include 'delete_produk.php';
        }
        elseif ($_GET['halaman']=='edit_produk') {
            include 'edit_produk.php';
        }
        elseif ($_GET['halaman']=='detail_pembelian') {
            include 'detail_pembelian.php';
        }
    }
    else{
        include 'beranda.php';
    }
    ?>
</div>
<div class="batas"></div>

        <script src="Assets/js/jquery.js" type="text/javascript"></script>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>

    </html>
