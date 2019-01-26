<?php
include 'config/koneksi.php';
?>

<div class="fuild-container" style="background-color:#ffffff;">
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h5><b>JENIS PRODUK</b></h5>
            </div>
            <div class="panel-body">
            <h5><b>ALL KATEGORI</b></h5>
                <ul style="text-decoraion:none; underline:none;">
                    <li><a href="#">AL-Quran & Tafsir</a></li>
                    <li><a href="#">Buku</a></li>
                    <li><a href="#">Tasbih</a></li>
                    <li><a href="#">Mukenah</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 style="font-weight:bold;">PRODUK TERBARU</h4>
            </div>

            <div class="panel-body">
                <div class="row">
                <?php $tampil=$koneksi->query("SELECT * FROM produk "); ?>
                <?php while ($perproduk=$tampil->fetch_assoc()) { ?>
                    <div class="col-md-3" >
                        <div class="thumbnail">
                            <img src="koleksi_barang/<?php echo $perproduk['foto_produk'];?>" style="width:110px; height:150px;" >
                            <div class="caption">
                            <h6><?php echo $perproduk['nama_produk']; ?></h6>
                            <h6>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h6>
                        </div>
                    <a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-danger">BELI</a>
                    </div>
                </div>                
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div>