<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0"></meta>
	<title>Edit Contact</title>

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
          <br><br><br><br>
        </li>

      </ul>
    </div>

    <!-- Konten -->

    <?php
      include "koneksi.php";
      $id_contact = $_GET['id_contact'];

      
      $query = "SELECT * FROM contact WHERE id_contact = '$id_contact'";
      $data = mysqli_query($koneksi,$query);

      while($d = mysqli_fetch_array($data)){
        $deskripsi = $d['deskripsi'];
        $alamat = $d['alamat'];
        $phone = $d['phone'];
        $email = $d['email'];
        $github = $d['github'];
        $facebook = $d['facebook'];
        $instagram = $d['instagram'];

      }
    ?>




    <div class="col-md-9 bg-white p-5 pt-5">
      <p class="fs-4"><i class="fas fa-envelope" style="margin-right: 10px;"></i>Edit Contact</p>
      
      <div class="row">
        <form action="proses_ubah_contact.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id_contact" value="<?php echo $id_contact; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
            <textarea class="form-control mb-3" name="deskripsi" placeholder="Masukan Deskripsi"><?php echo $deskripsi; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $alamat; ?>" class="form-control mb-3" placeholder="Masukan alamat">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="number" name="phone" value="<?php echo $phone; ?>" class="form-control mb-3" placeholder="Masukan Phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>" class="form-control mb-3" placeholder="Masukan Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Github</label>
            <input type="text" name="github" value="<?php echo $github; ?>" class="form-control mb-3" placeholder="Masukan Link Github">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Facebook</label>
            <input type="text" name="facebook" value="<?php echo $facebook; ?>" class="form-control mb-3" placeholder="Masukan Link Facebook">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Instagram</label>
            <input type="text" name="instagram" value="<?php echo $instagram; ?>" class="form-control mb-3" placeholder="Masukan Link Instagram">
          </div>

          <input type="hidden" value="<?php echo $_SESSION['id_admin']; ?>" name="id_admin">
          <button type="submit" class="btn btn-success">Simpan data</button>
          <a href="lihat_contact.php" class="btn btn-primary">Kembali</a>

        </form>
      </div>
      
    </div>
 



  </div>




</body>
</html>