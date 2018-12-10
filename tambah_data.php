<?php
    session_start();

    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:login.php");
        exit;
    }

    require 'tambah.php';


    if(isset($_POST['submit']))
    {
        var_dump($_POST);
        var_dump($_FILES);
        die();


        if(tambah($_POST)>0)
        {
           echo "
            <script>
                alert('data berhasil disimpan');
                document.location.href='index.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('data gagal disimpan');
                document.location.href='tambah_data.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Data Pasien</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                    <a href="login.php">Daftar Pasien</a>
                </li>
            </ul>
    </nav>
    </body>
</html>
