<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sentral Koleksi Indonesia</title>
    <!-- Meta tag Keywords -->
    <link rel="icon" type="image/png" href="<?=base_url();?>/asset/admin/dist/img/uin.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/asset/loginu/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/asset/loginu/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Selamat Datang</h1>
                    <p class="sub-para">Sistem Informasi Peramalan Berbasis Web Sentral Koleksi Indonesia</p>
                    <h2>Masuk</h2>
                    <form action="<?php echo site_url('C_login')?>" method="post">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" placeholder="Silahkan Masukkan Email" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Silahkan Masukkan Password" required="">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    </form>
<!--                 
                    <p class="account">Don't have an account? <a href="#register">Register</a></p> -->
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->

        <!-- <div class="footer">
            <p>&copy; 2021 Gathering Log In form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
        </div> -->

        <!-- footer -->
    </div>

</body>

</html>