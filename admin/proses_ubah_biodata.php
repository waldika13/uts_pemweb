<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$id_biodata = $_POST['id_biodata'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$profile = $_POST['profile'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$about_me = $_POST['about_me'];
	$id_admin = $_POST['id_admin'];


	$query = "UPDATE biodata SET namaLengkap = '$nama_lengkap', profile = '$profile', email = '$email', phone = '$phone', aboutUs = '$about_me', id_admin='$id_admin' WHERE id_biodata = '$id_biodata' ";

	
	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location:lihat_biodata.php");
		
	}

?>