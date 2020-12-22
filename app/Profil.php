<?php 
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: Login.php");
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport " content="width-device-width, initial-scale-1">
        <title>Profil Cafe</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css"  href="css/profil.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    </head> 

    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="5"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="6"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="7"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="8"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/Order.jpg" class="d-block w-100" alt="Order">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4">PESAN SEKARANG<br><span class="font-weight-bold">SEGERA</span></h1>
                        <hr class="my-4">
                        <p class="lead"><strong>Sebelum Kehabisan</strong></p>
                        <a class="btn btn-primary btn-lg font-weight-bold" href="Order.php" role="button">ORDER</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/Roti Bakar.jpg" class="d-block w-100" alt="MantapMantap">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Roti Bakar</h5>
                        <p>Roti Bakar Mantap Mantap Dengan Harga Rp. 18.000</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/Roti Mixed.jpg" class="d-block w-100" alt="MantapMantap1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Roti Bakar Keju Cokelat</h5>
                        <p>Roti Bakar Keju Cokelat Ah Mantap Dengan Harga Rp. 20.000 </p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/Masakan1.jpg" class="d-block w-100" alt="MantapMantap2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pancong Lumer</h5>
                    <p>Pancong Lumer Sedap Mantap Dengan Harga Rp. 12.000</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/Masakan2.jpg" class="d-block w-100" alt="MantapMantap3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pancong Lumer Keju</h5>
                        <p>Pancong Lumer Keju Ah Sedap Mantap Dengan Harga Rp. 15.000</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/cappucino.jpg" class="d-block w-100" alt="minuman">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cappucino</h5>
                        <p>Cappucino Bukan CinoCap Dengan Harga Rp. 13.000 </p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/moc.jpg" class="d-block w-100" alt="minuman2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Moccacino</h5>
                    <p>Moccacino Bukan Mukacino Dengan Harga Rp. 14.000</p>
                </div>
                </div>
                <div class="carousel-item " data-bs-interval="10000">
                    <img src="img/orange.jpg" class="d-block w-100" alt="minuman3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Teh Panas</h5>
                        <p>Teh Panas Dengan Harga Murah Rp. 2.000</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/ice.jpg" class="d-block w-100" alt="minuman4">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Es Teh</h5>
                        <p>Es Teh Dengan Harga Merakyat Rp. 2.000 </p>
                </div>
                </div>                
            </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
        </div>

        <div class="content">
            <div class="deskripsi">
                <h1>Cafe Kenangan Mantan</h1>
                <p>Cafe ini dibuat oleh dua orang mahasiswa polinema yang berasal dari timur dan barat.
                    Yang satu berasal dari Bogor Jawa Barat dan satu lagi dari Malang Jawa Timur. <br>
                    Website ini dibuat karena hasil dari pertumpahan ide dua orang ini yang menciptakan website cafe. <br>
                    Dan menu yang disediakan pada cafe ini bermacam macam dari snack dan minuman semua ada dan harganya
                    sangat terjangkau untuk semua kalangan.
                </p>
            </div>
        </div>
            
        <div class="reservasi">
                <h3>Reservasi Order</h3>
                <p> 
                    <a class="email" href="Order.php">ORDER</a>
            </p>
                <p>Jl. Arjuno No.17 
                    <br>
                    Batu
                </p>
                <p>
                    <a class="map" href="Lokasi.php">Lokasi Cafe</a>
                </p>                
        </div>
        <div class="pesan">
            <div class="open">
                <h3>Opening Time</h3>
                <p>Every Day: 08.00 - 00.00</p>
                <p>_________________________</p>
                <p>All Day Menu Available</p>
                <p>Jangan Lupa Bersenang Senang</p>
            </div>            
        </div>   
        
        <div class="biodata">
            <h1>Profil Mahasiswa</h1>
                <div class="profil1">
                    <p>
                    <img class="maul" src="img/Me.jpeg" width="150" height="200">
                    <br><br>
                    Nama: Maulana Malik Ibrahim<br>
                    NIM: 1941720055 <br>
                    Kelas: TI2A <br>
                    Prodi: D4 Teknik Informatika <br><br>

                    <img class="riz" src="img/Riz.jpg" width="150" height="200">
                    <br><br>
                    Nama: Rizqy Ghaniyyu Fadhilah <br>
                    NIM: 1941720112 <br>
                    Kelas: TI2A <br>
                    Prodi: D4 Teknik Informatika <br>
                </p>
            </div>     
        </div>
        <footer>
            <div class="container">
                <small>Copyright &copy;Maulana_mlk,Rizky. All rights Reserved.</small>
            </div>
        </footer>  
    </body>
</html>