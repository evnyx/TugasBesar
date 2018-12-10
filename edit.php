<?php
    session_start();

    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:login.php");
        exit;
    }

    require 'functions.php';

    if(isset($_POST['submit']))
    {


        if(edit($_POST)>0)
        {
            echo "
            <script>
                alert('data berhasil diperbaharui');
                document.location.href='daftarpasienadmin.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('data gagal diperbaharui');
                document.location.href='daftarpasienadmin.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
    $id=$_GET["id"];
    //var_dump($id);

    $pasien=query("SELECT * FROM pasien WHERE id=$id")[0];
    //var_dump($mhs[0]["Nama"]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update data</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navigasi -->
    <div>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <a class="navbar-brand" href="index.php"><img src="../RumahSakit/image/logo.jpg" style="height:150%;"></a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Beranda</a>
                </li>
                <li>
                    <a href="about.php">Tentang</a>                </li>
                <li>
                    <a href="contactus.php">Hubungi Kami</a>
                </li>
                <li class="active">
                    <a href="daftarpasienadmin.php">Daftar Pasien</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <br><br>
        <h1>Update Data Pasien </h1>

        <form class="form-horizontal" action="" method="POST">
            <input type="hidden" name="id" value="<?= $pasien["id"] ?>">
            <input type="hidden" name="GambarLama" value="<?= $pasien["Gambar"] ?>">
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="NIK">NIK:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NIK" id="NIK" value="<?= $pasien["NIK"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $pasien["Nama"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="JenisKelamin">Jenis Kelamin (L/P):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" value="<?= $pasien["JenisKelamin"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Alamat">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" id="Alamat" value="<?= $pasien["Alamat"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="GolonganDarah">Golongan Darah:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="GolonganDarah" id="GolonganDarah" value="<?= $pasien["GolonganDarah"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="JenisPasien">Jenis Pasien (Umum/Khusus):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="JenisPasien" id="JenisPasien" value="<?= $pasien["JenisPasien"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Gambar">Gambar:</label>
                <div class="col-sm-10">
                    <img src="image/<?= $pasien["Gambar"];?>" alt="" height="100" width="100"><br>
                    <input type="file" class="form-control" name="Gambar" id="Gambar">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-default">Update Data</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>