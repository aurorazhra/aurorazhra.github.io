<?php 
    session_start();
    if (isset($_SESSION["login"])) {
        header("Location: Project.php");
        exit;
    }
    require 'Functions.php';
    $conn = mysqli_connect("localhost", "root", "", "cafedb");
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM customer WHERE
            username = '$username'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password == $row["Sandi"]) {
                //set session
                $_SESSION["login"] = true;
                header("Location: Project.php");   
                exit;
            }
        }

        $error = true;
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
          <h1>Login</h1>
           <?php if(isset($error)):?>
            <p style="color:red; font-style: italic;"> Username/ password salah</p>
           <?php endif;?>
            <form action="" method="post">
                <label>Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit" name="login">Log in</button>
            </form>
            <a href="Registered.php">Registered</a>
        </div>     
    </body>
</html>