<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$id_contact = $_POST['id_contact'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $github = $_POST['github'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $id_admin = $_POST['id_admin'];


	$query = "UPDATE contact SET deskripsi = '$deskripsi', alamat = '$alamat', phone = '$phone', email = '$email', github = '$github', facebook = '$facebook', instagram = '$instagram' WHERE id_contact = '$id_contact' ";

	
	$data = mysqli_query($koneksi, $query);
	
	if($data) {
		header("Location:lihat_contact.php");
	}

?>