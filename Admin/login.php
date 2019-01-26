<?php 
session_start();
$koneksi = new mysqli("localhost","root","","penjualan_online")
?>

<!DOCTYPE html>
<html>
<head>
    <title>SI - Penjualan Online</title>
    <meta charset="UTF-8">
        
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-success" style="margin-top:150px;">
        <div class="panel-heading">
        <h3 class="panel-title">Masuk Ke Sistem</h3>
        </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post">
            <div class="form-group">
            <div class="col-sm-12">
                <input type="text" name="username" class="form-control input-sm" placeholder="Username" required="" autocomplete="off"/>
            </div>
            </div>

            <div class="form-group">
            <div class="col-sm-12">
                <input type="password" name="paswd" class="form-control input-sm" placeholder="Password" required="" autocomplete="off"/>
            </div>
            </div>

            <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" name="login" value="login" class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                    Login Sistem
                </button>
                <br>
            </div>
        </form>
    </div>
    </div>
    </div>

</div>
</body>
</html>

<?php 
if (isset($_POST["login"])) 
{   
    $username = $_POST["username"];
    $password = $_POST["paswd"];
    $paswd_md5 = md5($password);
    $ambil = $koneksi->query("SELECT * FROM user WHERE username='$username' AND paswd='$paswd_md5'");

    $yangcocok = $ambil->num_rows;

    if ($yangcocok==1) 
    {
        $akun = $ambil->fetch_assoc();
        $_SESSION["admin"] = $akun;
        echo "<script>alert('Anda Sukses Login');</script>";
        echo "<script>location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Anda Gagal Login, Periksa Akun Anda');</script>";
        echo "<script>location='login.php';</script>";
    }
}
