<?php 
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0"></meta>
	<title>Lihat Education Admin</title>

	<!-- CSS fontAwesome -->
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

	<!-- CSS JS Popper Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



	  <!-- Vendor CSS Files -->
	  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style type="text/css">
      .nav-link:hover {
        background-color: grey;
        border-radius: 5px;
      }
    </style>


</head>
<body>
	<?php 
		session_start();
	?>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MyPortfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      

        <div class="icon">
          <h5>
            <a href="logout.php"><i class="fas fa-sign-out-alt text-dark" style="margin-right: 15px"></i></a>
          </h5>
        </div>
      </div>
    </nav>
 
	
  
  <div class="row no-gutters">
    <!-- Sidebar -->
    <div class="col-md-3 bg-dark text-white">
      <ul class="nav flex-column" style="text-align: start; margin-left: 20%;">
        <li class="nav-item">
          <a class="nav-link text-white mt-1 mb-1" href="dashboard.php"><i class="fas fa-tachometer-alt" style="margin-right: 10px;"></i>Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white mt-1 mb-1" href="lihat_biodata.php"><i class="fas fa-address-card" style="margin-right: 10px;"></i>Biodata</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="lihat_testimoni.php"><i class="fas fa-thumbs-up" style="margin-right: 10px;"></i></i>Testimoni</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="lihat_interests.php"><i class="fas fa-hand-holding-heart" style="margin-right: 10px;"></i></i>Interest</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="lihat_education.php"><i class="fas fa-user-graduate" style="margin-right: 10px;"></i></i>Education</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="lihat_contact.php"><i class="fas fa-envelope" style="margin-right: 10px;"></i></i>Contact</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i></i>Keluar</a>
        </li>
        <li class="nav-item">
          <br><br><br><br><br><br><br><br>
        </li>

      </ul>
    </div>

    <!-- Konten -->

    <div class="col-md-9 bg-white p-5 pt-5">
      <p class="fs-4"><i class="fas fa-list-ul" style="margin-right: 10px;"></i>Lihat Education</p>
      
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Sekolah</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Awal Sekolah</th>
                <th scope="col">Akhir Sekolah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php

              $no = 1;
              $query = "SELECT * FROM education";
              $data = mysqli_query($koneksi,$query);

              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['kampus'];?></td>
                    <td><?php echo $d['programStudi'];?></td>
                    <td><?php echo $d['awalSekolah'];?></td>
                    <td><?php echo $d['akhirSekolah'];?></td>
                    <td>
                      <a href="tampil_ubah_education.php?id_education=<?php echo $d['id_education']; ?>" class="btn btn-primary">Edit</a>
                      <!-- <a href="" class="btn btn-danger">Hapus</a> -->
                    </td>
                </tr>
                <?php
              } ?>

          </table>  
        </div>
      </div>
      
    </div>
 



  </div>




</body>
</html>