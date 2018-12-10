<?php
    require 'functions.php';
    $pasien=query(" SELECT * FROM pasien");

    if(isset($_POST["cari"]))
    {
        $pasien=cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Daftar Pasien</title>
        <style>
            .divider500{
                width:600px;
                height:auto;
                display:inline-block;
            }
            .divider10{
                width:10px;
                height:auto;
                display:inline-block;
            }
        </style>
    </head>
    <body>
        <!-- Navigasi -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <a class="navbar-brand" href="index.php"><img src="../TugasBesar/image/logo.jpg" style="height:150%;"></a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Beranda</a>
                </li>
                <li>
                    <a href="about.php">Tentang</a>
                </li>
                <li>
                    <a href="contactus.php">Hubungi Kami</a>
                </li>
                <li class="active">
                    <a href="daftarpasienpelanggan.php">Daftar Pasien</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="daftarpasienadmin.php">Login</a>
                </li>
                <li>
                    <a> </a>                    
                </li>
            </ul>
        </nav>

        <br><br>
        
        <div class="container">
            <h2>Daftar Pasien</h2>
            <form action="" method="post">
                <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
                <button type="submit" name=cari> Cari </button>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Jenis Pasien</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    <?php foreach($pasien as $row):?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["Nama"]; ?></td>
                        <td><?= $row["JenisKelamin"]; ?></td>
                        <td><?= $row["Alamat"]; ?></td>
                        <td><?= $row["JenisPasien"]; ?></td>
                        <td><img src="image/<?php echo $row["Gambar"]; ?>"alt="" height="100" width="100" srcset=""></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </body>
    </html>
