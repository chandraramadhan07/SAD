<?php 
include "layout.html";
include "../service/database.php";

if(isset($_POST["register"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES
    ('$username', '$password')";
    
    if($db->query($sql)) {
        echo "Register berhasil";
    } else {
        echo "Register gagal";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log-reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    

    <div class="container">
        <div class="content-box">
            <div class="content-header">
                <h3>Register Akun</h3>
            </div>
            <div class="content-hero">
                <form action="register.php" method="POST">
                    <div class="username">
                        <p>USERNAME</p>
                        <input type="text"  name="username"/>
                    </div>
                    <div class="username">
                        <p>PASSWORD</p>
                        <input type="password"  name="password"/>
                    </div>
                    <button type="submit" name="register">Buat akun</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>