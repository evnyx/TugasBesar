<?php
    session_start();
    
    require 'functions.php';

    if(isset($_COOKIE['login']))
    {
        if($_COOKIE['login']=='true')
        {
            $_SESSION['login']=true;
        }
    }

    if(isset($_SESSION["login"]))
    {
        header("Location:daftarpasienadmin.php");
        exit;
    }

    if(isset($_POST["login"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];


        $result=mysqli_query($conn,"SELECT * FROM loginadmin WHERE username='$username'");

        if(mysqli_num_rows($result)===1)
        {
            $row=mysqli_fetch_assoc($result);
            $hash=password_hash($password,PASSWORD_DEFAULT);
            if(password_verify($password,$hash))
            {
                $_SESSION["login"]=true;
                
                if(isset($_POST['remenber']))
                {
                    setcookie('id',$row['id'],time()+60);
                    setcookie('key',hash(sha256,$row['username']),time()+60);
                }

                header("Location:daftarpasienadmin.php");
                exit;
            }
        }
        $error=true;
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .progress-bar {
                color: #333;
            } 
            {
                -webkit-box-sizing: border-box;
	            -moz-box-sizing: border-box;
	            box-sizing: border-box;
	            outline: none;
            }

            .form-control {
	            position: relative;
	            font-size: 16px;
	            height: auto;
	            padding: 10px;
		        @include box-sizing(border-box);

		        &:focus {
		            z-index: 2;
		        }
	        }
            body {
	            background-color: white;
            }

            .login-form {
	            margin-top: 200px;
            }

            form[role=login] {
	            color: #5d5d5d;
	            background: #f2f2f2;
	            padding: 26px;
	            border-radius: 10px;
	            -moz-border-radius: 10px;
	            -webkit-border-radius: 10px;
            }
            form[role=login] input,
            form[role=login] button {
                font-size: 18px;
                margin: 16px 0;
            }
            form[role=login] > div {
                text-align: center;
            }
            
            .form-links {
                text-align: center;
                margin-top: 1em;
                margin-bottom: 50px;
            }
            .form-links a {
                color: #fff;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <a class="navbar-brand" href="index.php"><img src="../RumahSakit/image/logo.jpg" style="height:150%;"></a>
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

        <?php if(isset($error)):?>
        <p style="color:red; font-style=bold">
            Username dan password salah</p>
        <?php endif?>

        <div class="container">
            <div class="row" id="pwd-container">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <section class="login-form">
                    <form method="post" action="" role="login">
                        <h1>Login</h1>
                        
                        <input type="text" name="username" placeholder="Username" required class="form-control input-lg" />
      
                        <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
                        <div class="pwstrength_viewport_progress"></div>
                        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </form>
                </section>  
            </div>
            <div class="col-md-4"></div>
            </div>  
        </div>
    </body>
</html>