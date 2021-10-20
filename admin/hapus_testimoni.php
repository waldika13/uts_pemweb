<?php 

	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();


	$id_testimoni = $_GET['id_testimoni'];

	$query = "DELETE FROM testimoni WHERE id_testimoni = '$id_testimoni' ";
	$data = mysqli_query($koneksi, $query);

	if($data) {
		header("Location: lihat_testimoni.php");
		
	}

 ?>

