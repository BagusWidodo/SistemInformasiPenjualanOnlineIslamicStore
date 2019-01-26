<?php
$koneksi = new mysqli("localhost","root","","penjualan_online");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> PRODUK TERJUAL</h3>
                </div>
                <div class="panel-body">
                    
<table class="table table-bordered small">
    <thead class="bg bg-success">
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Tanggal</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Jumlah</th>
        <th>Total</th>
    </thead>
    <tbody>
    <?php $no = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.username=pelanggan.username"); ?>
    <?php while($pisah=$ambil->fetch_assoc()) { ?>
    <tr>
        <td> <?php echo $no; ?></td>
        <td> <?php echo $pisah['nama_pelanggan']; ?></td>
        <td> <?php echo $pisah['tanggal_pembelian']; ?></td>
        <td> <?php echo $pisah['nama_produk']; ?></td>
        <td> Rp. <?php echo number_format($pisah['harga_produk']); ?></td>
        <td> <?php echo $pisah['jumlah']; ?></td>
        <td> Rp. <?php echo number_format($pisah['total_pembelian']); ?></td>
    </tr>
    <?php $no++; ?>
    <?php } ?>
    </tbody>
</table>
<a href="print.php" target="_blank" class="btn btn-danger"><span class="fa fa-print"> PRINT</span></a>

                </div>
            </div>

        </div>
    </div>
</div>
