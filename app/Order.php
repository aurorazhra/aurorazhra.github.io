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
        <title>Order Cafe</title>
        <link rel="stylesheet" type="text/css"  href="StyleProject.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <script src="jquery-3.5.1.js"></script>
        <script>

        </script>
    </head> 
    <body>
        <div class="akun">
            <div class="container">
                <ul>
                    <li><a href="https://www.youtube.com/?hl=id&gl=ID"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/maulanaa.mlk/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/login?lang=id"><i class="fab fa-twitter"></i></a></li>
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
        <style>
            .tengah{
              background-position:center;
              width:auto;
              height:auto;
            }
          
            table{
              background: aquamarine;
              margin:auto;
            }
        
        </style>
        <div class="menu">
            <div>
                <table border="1">
                <h1 align="center" style="background: rgba(0, 0, 0, 0.85); color: white; font-family: 'Indie Flower', cursive;" >Pemesanan</h1>
                <tr>    
                <th>Id Pembeli</th>
                <th><input type="number"  id="id" onchange="total()" ></th>
                </tr>
                <tr>    
                <th>Nama</th>
                <th><input type="text"  id="nama" onchange="total()" ></th>
                </tr>
                <th>Status Pembeli</th>
                  <th><input type="radio" id="status_pembeli" name="status_pembeli" value="Member" required>&nbsp;<label>Member</label>
                  <input type="radio" id="status_pembeli" name="status_pembeli" value="Non Member" required>&nbsp; <label>Non Member</label></th>
                  <br>
                <tr>    
                <th>Makanan</th>
                <th><select id="lauk" onchange="total()">
                    <option value="Roti Bakar">Roti Bakar (Rp. 18.000)</option>
                    <option value="Roti Bakar Keju Cokelat">Roti Bakar Keju Cokelat (Rp. 20.000)</option>
                    <option value="Pancong Lumer">Pancong Lumer (Rp. 12.000)</option>
                    <option value="Pancong Lumer Keju">Pancong Lumer Keju(Rp. 15.000)</option>
                </select></th>
                </tr>
                <tr>    
                <th>Jumlah Makanan</th>    
                <th><input type="number" id="jumlah_lauk"  value="0" onchange="total()"></th>
                </tr>
                <tr>    
                <th>Nama Minuman</th>
                <th><select id="minuman" onchange="total()">
                    <option value="Cappucino">Cappucino (Rp. 13.000)</option>
                    <option value="Moccacino">Moccacino (Rp. 14.000)</option>
                    <option value="Es Teh">Es Teh (Rp. 2.000)</option>
                    <option value="Teh Hangat">Teh Hangat (Rp. 2.000)</option>
                </select></th>
                </tr> 
                <th>Jumlah Minuman</th>    
                <th><input type="number" id="jumlah_minuman"  value="0" onchange="total()"></th>
                </tr>
            
                <tr>    
                <th>Jumlah total</th>
                <th><input type="text" style="background: greenyellow" id="total" disabled></th>
                </tr>
            
                <tr>    
                <th>Pembayaran</th>    
                <th><input type="number" id="bayar" onchange="total()"></th>
                </tr>
               
                <tr>    
                <th>Kembalian</th>
                <th><input type="text" style="background: violet" id="total1" disabled></th>
                </tr>
                      
                <tr>
                <th><input type="button" style="background: white"  onclick="window.print()" value="CETAK"></th>
                </tr>
               
                <tr>   
                <table width="300" height="201px" border="8">
                <th><label align="landscape"  id="cetak" ></label></th>
                </table>
                </tr>          
               
                </table>
            
              <script type="text/javascript">
              
              function total() {
                var id              = parseInt(document.getElementById('id').value);
                var nama            = document.getElementById('nama').value;
                var status_pembeli  = document.querySelector('input[name = status_pembeli]:checked').value;
                var lauk            = document.getElementById('lauk').value;
                var jumlah_lauk     = parseInt(document.getElementById('jumlah_lauk').value);
                var minuman         = document.getElementById('minuman').value;
                var jumlah_minuman  = parseInt(document.getElementById('jumlah_minuman').value);
            
                    if (lauk == "Roti Bakar") {
                        harga_lauk = 18000;
                    } else if (lauk == "Roti Bakar Keju Cokelat") {
                        harga_lauk = 20000;
                    } else if (lauk == "Pancong Lumer") {
                        harga_lauk = 12000;
                    } else if(lauk == "Pancong Lumer Keju"){
                        harga_lauk = 15000;
                    }
            
                    if (status_pembeli == 'Member') {
                        if (jumlah_lauk == 1) {
                            diskon = harga_lauk * 0.05;
                        } else if (jumlah_lauk <= 3) {
                            diskon = harga_lauk * 0.07;
                        } else {
                            diskon = harga_lauk * 0.1;
                        }
                    } else if(status_pembeli == 'Non Member'){
                        if (jumlah_lauk <= 3) {
                            diskon = 0;
                        } else if (jumlah_lauk <= 5) {
                            diskon = (harga_lauk * jumlah_lauk) * 0.05;
                        } else {
                            diskon = harga_lauk * 0.05;
                        }
                    }
            
                    if (minuman == "Cappucino") {
                          harga_minuman = 13000;
                    } else if (minuman == "Moccacino") {
                          harga_minuman = 14000;
                    } else if (minuman == "Es Teh") {
                          harga_minuman = 2000;
                    } else if (minuman == "Teh Hangat") {
                          harga_minuman = 2000;
                    }
            
                var pembayaran      = parseInt(document.getElementById('bayar').value);
                var jumlah_harga    = (harga_lauk * jumlah_lauk) + (harga_minuman * jumlah_minuman) - diskon;
                document.getElementById('total').value = jumlah_harga;
            
                var kembali = pembayaran - jumlah_harga;
                document.getElementById('total1').value = kembali;
              
               var cetak  = "Id Pembeli    : "+id+"</br>"+
                          "Nama           : "+nama+"</br>" +
                          "Status Pembeli : "+status_pembeli+"</br>"+
                          "Makanan      : "+lauk+"</br>"+
                          "Jumlah       : "+jumlah_lauk+"</br>"+
                          "Minuman   : "+minuman+"</br>"+
                          "Jumlah Minuman : "+jumlah_minuman+"</br>"+
                          "Jumlah_total  : "+jumlah_harga+"</br>"+
                          "pembayaran    : "+pembayaran+"</br>"+
                          "Kembalian     : "+kembali;
                document.getElementById("cetak").innerHTML=cetak;
              }
             </script>
             </div>
        </div> 
        <footer>
            <div class="container">
                <small>Copyright &copy;Maulana_mlk. All rights Reserved.</small>
            </div>
        </footer>
       
        
    </body>
</html>