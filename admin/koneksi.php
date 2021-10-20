<?php 

$namaServer = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

//Membuat koneksi

$koneksi = mysqli_connect($namaServer, $username, $password, $database);

//cek koneksi

if(!$koneksi){
	die("Koneksi Gagal : ".mysql_connect_error());
}


?>