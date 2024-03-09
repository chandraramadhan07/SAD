<?php
    include "../service/database.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./log-reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<?php include"./layout.html" ?>

    <div class="container">
        <div class="content-box">
            <div class="content-header">
                <h3>Login Akun</h3>
            </div>
            <div class="content-hero">
            <form>
                    <div class="username">
                        <p>USERNAME</p>
                        <input type="text"  name="username"/>
                    </div>
                    <div class="username">
                        <p>PASSWORD</p>
                        <input type="password"  name="password"/>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>