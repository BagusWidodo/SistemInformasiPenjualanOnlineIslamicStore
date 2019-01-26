<?php  
    require '../config/koneksi.php';
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-plus"></span> TAMBAH PRODUK </h3>
                </div>
                <div class="panel-body">
                    
    <form method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control">
        </div>
        <div class="form-group">
            <label>Harga Produk</label>
            <input type="number" name="harga_produk" class="form-control">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"> </textarea> 
        </div>
        <div class="form-group">
            <label>Foto Produk</label>
            <input type="file" class="form-control" name="foto">
        </div>


        <button class="btn btn-danger" name="simpan">SIMPAN</button>

    </div>

</form>
                        
                </div>
            </div>

        </div>
    </div>
</div>

<?php  

if (isset($_POST['simpan'])) 
{
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../koleksi_barang/".$nama);
    $koneksi->query("INSERT INTO produk 
        (nama_produk, harga_produk, foto_produk, keterangan)
        VALUES('$_POST[nama_produk]','$_POST[harga_produk]','$nama','$_POST[keterangan]')");

        echo "<script>alert('Produk Berhasil Disimpan');</script>";
        echo "<script>location='index.php?halaman=produk';</script>";
}

?>