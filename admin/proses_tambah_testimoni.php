<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$namaTestimoni = $_POST['namaTestimoni'];
	$deskripsi = $_POST['deskripsi'];
	$id_admin = $_POST['id_admin'];

	$query = "INSERT INTO portfolio.testimoni (namaTestimoni, deskripsi, id_admin) 
    VALUES ('$namaTestimoni','$deskripsi','$id_admin')";

    
	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location: lihat_testimoni.php");
	}

?>