<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$nama_lengkap = $_POST['nama_lengkap'];
	$profile = $_POST['profile'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$about_me = $_POST['about_me'];
	$id_admin = $_POST['id_admin'];

	$query = "INSERT INTO portfolio.biodata (namaLengkap, profile, email, phone, aboutUs, id_admin) 
    VALUES ('$nama_lengkap','$profile','$email','$phone','$about_me','$id_admin')";


	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location:tambah_biodata.php");
	}

?>