<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kontak Kami</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <a class="navbar-brand" href="index.php"><img src="../TugasBesar/image/logo.jpg" style="height:150%;"></a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Beranda</a>
                </li>
                <li>
                    <a href="about.php">Tentang</a>
                </li>
                <li class="active">
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

        <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <br>
                        <h1 class="h1">
                            Hubungi Kami
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Surel</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Surel" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                        Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Pilih:</option>
                                        <option value="service">Customer Service</option>
                                        <option value="suggestions">Saran</option>
                                        <option value="product">Bantuan Product</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Pesan</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Pesan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Lokasi RSUD Kabupaten Jombang</legend>
            <address>
                <strong>Alamat.</strong><br>
                Kepanjen, Jl. KH. Wahid Hasyim No.52, Kepanjen,<br>
                Kec. Jombang, Kabupaten Jombang, Jawa Timur 61416<br>
                <abbr title="Phone">
                    Telepon : 
                </abbr>
                    (0321) 863502
                </address>
                <address>
                    <strong>Kontak Surel</strong><br>
                    <a href="mailto:humas@rsudjombang.com">humas@rsudjombang.com</a>
                </address>
                </form>
            </div>
        </div>
    </div>

    </body>
</html>