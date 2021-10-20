<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$id_testimoni = $_POST['id_testimoni'];
	$namaTestimoni = $_POST['namaTestimoni'];
	$deskripsi = $_POST['deskripsi'];
	$id_admin = $_POST['id_admin'];


	$query = "UPDATE testimoni SET namaTestimoni = '$namaTestimoni', deskripsi = '$deskripsi', id_admin = '$id_admin' WHERE id_testimoni = '$id_testimoni' ";

	
	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location:lihat_testimoni.php");
		
	}

?>

