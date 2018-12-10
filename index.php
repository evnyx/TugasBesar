
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Utama</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body, html {
                height: 100%;
            }

            .bg {
                background-image: url("./image/bg.jpg");
                height: 100%; 

                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

            <a class="navbar-brand" href="index.php"><img src="../RumahSakit/image/logo.jpg" style="height:150%;"></a>
            
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php">Beranda</a>
                </li>
                <li>
                    <a href="about.php">Tentang</a>
                </li>
                <li>
                    <a href="contactus.php">Hubungi Kami</a>
                </li>
                <li>
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
        <div class="bg"></div>
    </body>
</html>