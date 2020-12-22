<?php 
function registrasi($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $name = strtolower(stripslashes($data["name"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM customer WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar')
              </script>";
        return false;
    }
    //cek konfirm password
    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai')
              </script>";
        return false;
    }

    //tambah user baru
    mysqli_query($conn, "INSERT INTO customer VALUES('','$name', '$email', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
?>