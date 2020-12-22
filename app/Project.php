<?php 
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: Login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport " content="width-device-width, initial-scale-1">
        <title>Tugas Besar Desproweb</title>
        <link rel="stylesheet" type="text/css"  href="StyleProject.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    </head> 
    <body>
        <div class="akun">
            <div class="container">
                <ul>
                    <li><a href="https://www.youtube.com/channel/UCDUkKzgKW2aiAvStBcwcyUA"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/maulanaa.mlk/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/RizFadhilahh?s=09"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <h1><a href="Project.HTML ">Cafe Kenangan Mantan</a></h1>
                <ul>
                    <li><a href="Project.php">Home</a></li>
                    <li><a href="Profil.php?page=profile">Profile</a></li>
                    <li><a href="Lokasi.php">Location</a></li>
                    <li><a href="Order.php">Order</a></li>
                </ul> 
            </div>
        </header>
        <!--SlidShow-->
        <div class="slide">
            <div class="slide1"></div>
            <div class="slide2"></div>
            <div class="slide3"></div>
        </div>
        <div class="hero">
            <div class="wrapper">
                <div class="heroleft">
                    <h2>Tempat Cocok Untuk Melupakan Dia!</h2>
                    <p> Cafe Kenangan Mantan berdiri sejak tahun 2018 Berkonsepkan Perasaan Galau Anak Muda Zaman Now, Cafe Ini Bertujuan Untuk Menarik Pelanggan Dari Semua Kalangan, Namun Lebih Mengutamakan Menarik Pelanggan Anak Muda. 
                        Pemilik Dari Cafe Ini Juga Terinspirasi Setelah Dirinya Di Putuskan Oleh Pacarnya, Dari Situlah Muncul Ide Untuk Membuat Sebuah Tempat (Cafe) Untuk Melupakan Kegalauan Akan Mantan Pacar Terdahulu. 
                        Sehingga Nantinya Setelah Menikmati Menu Dan Fasilitas yang ada, Para Customer Merasa Puas.
                    </p>
                    <a href="Profil.php">More Info!</button></a>
                </div>
                <div class="heroright">
                    <img src="images/banner.jfif" alt="">
                </div>
            </div>  
        </div>
        <!-- Hero -->
        <!-- Features -->
        <section class="service">
            <div class="container">
                <h3>SERVICE</h3>
                <div class="box">
                    <div class="col-4">
                        <div class="icon"><i class="fas fa-burger-soda"></i></div>
                        <a href="Order.php"><h4>Pesan Sekarang</h4></a>
                    </div>
                    <div class="col-4">
                        <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                        <a href="Lokasi.php"><h4>Lokasi</h4></a>
                    </div>
                    <div class="col-4">
                        <div class="icon"><i class="fas fa-phone-square-alt"></i></div>
                        <h4>Help Contact <br>0895-3330-8160</h4>
                    </div>
                    <div class="col-4">
                        <div class="icon"><i class="fas fa-user-circle"></i></div>
                        <a href="Profil.php"><h4>Profile</h4></a> 
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <small>Copyright &copy;Maulana_mlk,Rizky. All rights Reserved.</small>
            </div>
        </footer>    
    </body>
</html>