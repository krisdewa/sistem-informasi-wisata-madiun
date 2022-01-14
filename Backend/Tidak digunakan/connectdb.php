<?php

// KONEKSI KE DATABASE
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "database_wisatamadiun";
$koneksi    = mysqli_connect($host, $user, $password, $database);

if(!$koneksi){
    echo "Database tidak terkoneksi";
}

// UNTUK WAJIB AUTHENTICATION SEBELUM MENGAKSES WEB
function login() {
    session_start();
    if(empty($_SESSION['login'])){
        header('location: auth-login.php');
    }
}

?>

