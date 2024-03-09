<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "user_sad";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    echo "Terjadi Kesalahan";
    die("error!");
}

?>