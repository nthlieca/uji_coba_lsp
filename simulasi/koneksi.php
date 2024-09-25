<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_aplikasigudang";

$koneksi = mysqli_connect("localhost","root","","db_aplikasigudang");

if(!$koneksi){
    die ("koneksi gagal". mysqli_connect_error(). mysqli_connect_error());
}

?>