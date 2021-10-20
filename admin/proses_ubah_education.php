<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$id_education = $_POST['id_education'];
    $kampus = $_POST['nama_sekolah'];
    $programStudi = $_POST['programStudi'];
    $awalSekolah = $_POST['awalSekolah'];
    $akhirSekolah = $_POST['akhirSekolah'];
    $id_admin = $_POST['id_admin'];


	$query = "UPDATE education SET kampus = '$kampus', programStudi = '$programStudi', awalSekolah = '$awalSekolah', akhirSekolah = '$akhirSekolah' WHERE id_education = '$id_education' ";


	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location:lihat_education.php");
		
	}

?>