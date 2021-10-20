<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$id_interests = $_POST['id_interests'];
    $deskripsi = $_POST['deskripsi'];
    $id_admin = $_POST['id_admin'];


	$query = "UPDATE interests SET deskripsi = '$deskripsi', id_admin = '$id_admin' WHERE id_interests = '$id_interests' ";

	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location:lihat_interests.php");
		
	}

?>