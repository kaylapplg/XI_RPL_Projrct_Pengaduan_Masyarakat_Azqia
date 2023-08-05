<?php

$host ="localhost";
$user ="root";
$pass ="";
$db_name = "db_pengaduan_masyarakat";

$koneksi = mysqli_connect("localhost","root","","db_pengaduan_masyarakat");

if (mysqli_connect_error()){
    echo "koneksi database gagal : ".mysqli_connect_error();
}

?>
