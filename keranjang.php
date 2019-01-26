<?php

include 'config/koneksi.php';

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-shopping"></span> Keranjang </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <h3>Keranjang Belanja</h3>
        <hr>
                        </thead>
                        <tbody>
                          <section class="konten" >
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>SUB Harga</th>
                </tr>
            </thead>
            <tbody>
            
            <?php $nomor=1; ?>
            <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>

            <?php
            $tampil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
            $pecah=$tampil->fetch_assoc();
            $subharga=$pecah['harga_produk']*$jumlah;
            ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah['nama_produk']; ?></td>
                    <td><?php echo number_format($pecah['harga_produk']); ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td>Rp. <?php echo number_format($subharga); ?></td>
                </tr>
            <?php $nomor++; ?>
            <?php endforeach ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Belanja</a>
        <a href="" class="btn btn-danger">Checkout</a>
    </div>
</section>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
