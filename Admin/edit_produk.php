<?php
$tampil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
$pisah = $tampil->fetch_assoc();
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-globe"></span> EDIT DATA PRODUK </h3>
                </div>
                <div class="panel-body">

                <form method="post" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
		<label>ID Produk</label>
		<input type="text" name="id_produk" value="<?php echo $pisah['id_produk'] ?>" readonly="readonly" class="form-control">
</div>
<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama_produk" class="form-control" value="<?php echo $pisah['nama_produk']; ?>">
</div>
<div class="form-group">
		<label>Harga Produk</label>
		<input type="text" name="harga_produk" class="form-control" value="<?php echo $pisah['harga_produk']; ?>">
</div>
<div class="form-group">
		<label>Foto Produk</label>
		<input type="file" name="file" class="form-control ">
</div>
<div class="form-group">
	<label style="font-family: 'Cooper Black';">Keterangan</label>
	<textarea name="ket" class="form-control"> <?php echo $pisah['keterangan']; ?> </textarea> 
</div>
	
	<button class="btn btn-danger" name="edit"> EDIT </button>
</form>	


                </div>
            </div>

        </div>
    </div>
</div>

<?php
if (isset($_POST['edit']))
{
	$nama = $_FILES['file']['name'];
	$lokasi = $_FILES['file']['tmp_name'];
	//jika file yang lama diubah
	if (!empty($lokasi)) 
	{
		move_uploaded_file($lokasi, "../Koleksi_Barang/$nama");

		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama_produk]',
						harga_produk='$_POST[harga_produk]',
						foto_produk='$nama', keterangan='$_POST[keterangan]' WHERE id_produk='$_GET[id_produk]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama_produk]',harga_produk='$_POST[harga_produk]',
						keterangan='$_POST[keterangan]' WHERE id_produk='$_GET[id_produk]'");	
	}

	echo "<script>alert('Data Telah Diubah');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
}

?>