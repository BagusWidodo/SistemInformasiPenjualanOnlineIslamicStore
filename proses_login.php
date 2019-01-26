<?php
//ambil data dari form login
$btn=$_POST['login'];
$username=$_POST['username'];
$pwd=$_POST['password'];
$pwd_enkripsi= md5($pwd);

//Baca data ke database dengan label user
include 'config/koneksi.php';
$sql="SELECT * FROM pelanggan WHERE username='$username' AND password='$pwd_enkripsi'";
$query=  mysqli_query($koneksi, $sql) or die ("SQL Login Error");
$jumlahdata=  mysqli_num_rows($query);
if($jumlahdata > 0){
    $data=  mysqli_fetch_array($query); //ambil data dan konversi menjadi array
    session_start(); //aktifkan session wajib
    $_SESSION['username']=$username;
    $_SESSION['idsesi']=session_id();
    $_SESSION['nama']=$data['nama_pelanggan'];
    //pindahkan ke halaman index
    header("location:index.php", true);
}else{
    echo "<script> window.location.assign('login.php?error=yes');</script>";

}
