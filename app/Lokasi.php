<?php 
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: Login.php");
        exit;
    }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Lokasi Cafe Kenangan Mantan</title>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">    
    <link rel="stylesheet" type="text/css"  href="StyleProject.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <style>
     
      #map {
        height: 100%;
      }
      
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div class="akun">
      <div class="container">
          <ul>
              <li><a href="https://www.youtube.com/?hl=id&gl=ID"><i class="fab fa-youtube"></i></a></li>
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
    
    <div id="map"></div>
    
    <div class="map">
        <script>

            function initMap() {
              
              
              var batu = {lat: -7.9013179, lng: 112.5779015};
              
              
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 20,
                center: batu
              });
      
              
              var contentString = '<h2>Cafe Kenangan Mantan</h2>';
      
              
              var infowindow = new google.maps.InfoWindow({
                content: contentString,
                position: batu
              });
              
              
              infowindow.open(map);
      
              
            }
          </script>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?callback=initMap">
          </script>
    </div>
    


  </body>
</html>