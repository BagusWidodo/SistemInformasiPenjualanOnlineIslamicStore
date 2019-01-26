<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; 
?>


<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>SI - Penjualan Online</title>
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
                <li><a href="index.php?halaman=lokasi">Lokasi</a></li>
                <li><a href="index.php?halaman=about">About</a></li>
                <li><a href="index.php?halaman=kontak">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['username'])): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false"><strong><?=$_SESSION['username']?></strong></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="index.php?halaman=keranjang">Keranjang</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                        </ul>
                </li>  
                <?php else: ?>
                <li><a href="login.php">LOGIN</a></li>              
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>

<br><br><br><br>
<div class="fuild-container">
    <?php
    if (isset($_GET['halaman'])) 
    {
        if ($_GET['halaman']=="about")
        {
            include 'about.php';
        }
        elseif ($_GET['halaman']=="kontak") 
        {
            include 'kontak.php';
        }
        elseif ($_GET['halaman']=="lokasi") 
        {
            include 'lokasi.php';
        }
        elseif ($_GET['halaman']=='keranjang') {
            include 'keranjang.php';
        }
    }
    else{
        include 'beranda.php';
    }
    ?>
</div>
<div class="batas"></div>
<div class="fuild-container bg bg-success text-center navbar-bottom" style="padding:20px 0px 20px 0px; margin-top:155px;">
    <div class="row">
        <div class="col-xs-12">
            Copyright &COPY; <?= date('Y')?> STMIK Royal Kisaran | <b>OPEN SOURCE 2 </b>
        </div>
    </div>
</div>
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
