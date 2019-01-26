<?php
$koneksi = new mysqli("localhost","root","","penjualan_online");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>SI - Penjualan Online</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="../Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">

    h1, h2, h3, h4, h5, h6{
        font-weight: bold;
    }

    </style>

    <script>
    function printContent(el){
        var restorpage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorpage;
    }
</script>

</head>
<body>
<div id="printsatu">
<div class="container">
<center>
<h2>ISLAMIC Store</h2>
<h4>Jl. Masjid Lk. II, Kel. Pulau Simardan, Kec. Datuk Bandar Timur, <br>Kota Tanjungbalai - SUMATERA UTARA</h4>
</center><hr>
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
        <td> <?php echo $pisah['harga_produk']; ?></td>
        <td> <?php echo $pisah['jumlah']; ?></td>
        <td> <?php echo $pisah['total_pembelian']; ?></td>
    </tr>
    <?php $no++; ?>
    <?php } ?>
    </tbody>
    
</table>
<table width="100%">
    <tr>
        <td></td>
        <td class="text-right"><br><br>Tanjunbalai, <?= date("d-m-y")?>
            <br><br><br><br>
            <u>OWNER ISLAMIC Store</u><br>
            H. Abdul Wahab Sitorus
            </td></td>
    </tr>
</table>
</div>
</div><br><br>
<div class="container">
<a onclick="printContent('printsatu')" class="btn btn-danger"><span class="fa fa-print"> PRINT</span></a>
</div>

</body>
</html>