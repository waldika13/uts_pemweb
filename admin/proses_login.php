<?php 
	
	//memanggil file koneksi
	include "koneksi.php";

	//untuk memulai session pada website
	session_start();

	//untuk mengambil data dari form
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE username = '".$username."' and password = '".$password."'";
	$data = mysqli_query($koneksi, $query);
	$cek = mysqli_num_rows($data);

	if($cek > 0) {
		$baris = mysqli_fetch_array($data);
		$_SESSION['id_admin'] = $baris['id_admin'];
		$_SESSION['username'] = $baris['username'];
		$_SESSION['password'] = $baris['password'];

		header("Location:dashboard.php");
	} else {
		header("Location:index.php");
	}
	

?>