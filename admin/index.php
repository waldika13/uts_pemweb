<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0"></meta>
	<title>Admin Login</title>

	<!-- CSS fontAwesome -->
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

	<!-- CSS JS Popper Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

	  <!-- Vendor CSS Files -->
	  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<form action="proses_login.php" method="POST" enctype="multipart/form-data">
						<div class="card-header mb-3">
							<p class="fs-2 d-flex justify-content-center">Silahkan Login</p>
						</div>
						<div class="card-body">
							
								<div class="input-group mb-3">
								  	<span class="input-group-text"><i class="fas fa-user"></i></span>
								  	<input type="text" class="form-control" placeholder="Username" name="username">
								</div>
									

								<div class="input-group mb-3">
								  	<span class="input-group-text"><i class="fas fa-key"></i></span>
								  	<input type="password" class="form-control" placeholder="Password" name="password">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Login</button>
								</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	


</body>
</html>