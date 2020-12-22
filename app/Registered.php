<?php 
    // untuk koneksi
    $conn = mysqli_connect("localhost", "root", "", "cafedb");
    // ambil data dari tabel
require 'Functions.php';
    if (isset($_POST["register"])) {
        if (registrasi($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                  </script>";
                header("Location: Login.php");
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="StyleLogin.css">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
          <h1>Registered</h1>
            <form action="" method="post">
                <label>Nama</label><br>
                <input type="text" name="name" id="name"><br>
                <label>Email</label><br>
                <input type="text" name="email" id="email"><br>
                <label>Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password"><br>
                <label>Konfirmasi Password</label><br>
                <input type="password" name="password2" id="password2"><br>
                <button type="submit" name="register">Register</button>
            </form>
            <a href="Login.php">Login</a>
        </div>     
    </body>
</html>