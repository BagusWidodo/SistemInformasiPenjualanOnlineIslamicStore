<?php
include '../config/koneksi.php';
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-globe"></span> DATA PRODUK </h3>
                    <ul class="nav navbar-nav navbar-right" style="margin-right:5px;">
                        <br><li><h6><a href="index.php?halaman=tambah_produk">
                        <span class="fa fa-plus"> TAMBAH PRODUK </a></h6></li>
                    </ul>
                </div>
                <div class="panel-body">
<table class="table table-bordered small">
    <thead class="text-center bg bg-success">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Foto Produk</th>
            <th width="30%">Keterangan</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $tampil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($pisah = $tampil->fetch_assoc()) { ?>
        <tr>
            <td align="center"><?php echo $nomor; ?></td>
            <td><?php echo $pisah['nama_produk']; ?></td>
            <td>Rp. <?php echo number_format($pisah['harga_produk']); ?></td>
            <td><img src="../Koleksi_Barang/<?php echo $pisah['foto_produk'];?>" width="70px"> </td>
            <?php 
            $text_lengkap = $pisah['keterangan'];
            $text_potong = substr($text_lengkap, 0, 50);
            ?>
            <td><?php echo $text_potong; ?> ...</td>
            <td align="center">
            
            <a href="index.php?halaman=edit_produk&id_produk=<?php echo $pisah['id_produk']; ?>" class="btn btn-danger btn btn-xs" >
            <span class="fa fa-pencil"></span></a>
            <a href="index.php?halaman=delete_produk&id_produk=<?php echo $pisah['id_produk']; ?>" class="btn btn-primary btn btn-xs" >
            <span class="fa fa-times"></span></a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
                </div>
            </div>

        </div>
    </div>
</div>
