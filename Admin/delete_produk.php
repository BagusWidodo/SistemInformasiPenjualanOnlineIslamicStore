<?php 
	$koneksi = new mysqli("localhost","root","","penjualan_online")
?>

<?php  
$tampil = $koneksi->query("SELECT * FROM produk WHERE id_produk ='$_GET[id_produk]'");
$pisah = $tampil->fetch_assoc();
$filefoto = $pisah['foto_produk'];
if (file_exists("../koleksi_barang/$filefoto")) 
{
	unlink("../koleksi_barang/$filefoto");
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id_produk]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=produk'; </script>";

?>