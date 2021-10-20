<?php 

$namaServer = "remotemysql.com";
$username = "3amzmAEgGC";
$password = "Dm1100ZUkT";
$database = "3amzmAEgGC";

//Membuat koneksi

$koneksi = mysqli_connect($namaServer, $username, $password, $database);

//cek koneksi

if(!$koneksi){
	die("Koneksi Gagal : ".mysql_connect_error());
} else {
	Yap database berhasil
}	


?>
