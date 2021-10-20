<?php 

	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();


	$id_biodata = $_GET['id_biodata'];

	$query = "DELETE FROM biodata WHERE id_biodata = '$id_biodata' ";
	$data = mysqli_query($koneksi, $query);

	if($data) {
		header("Location: lihat_biodata.php");
		
	}

 ?>

