<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Sehat</title>
	<link rel="shortcut icon" href="logobsi.png">
	
	<link href="<?=base_url();?>bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>bootstrap/css/bootstrap-utilities.css" rel="stylesheet">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		  <a class="navbar-brand" href="#">Kesehatan</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="<?php echo base_url().'sehatkontrol'?>">Home</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Kategori
				</a>
				<ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
				  <li><a class="dropdown-item link-secondary" href="<?php echo base_url().'sehatkontrol/mata'; ?>">Mata</a></li>
				  <li><a class="dropdown-item link-secondary" href="<?php echo base_url().'sehatkontrol/wajah'; ?>">Wajah</a></li>
				  <li><a class="dropdown-item link-secondary" href="<?php echo base_url().'sehatkontrol/kulit'; ?>">Kulit</a></li>
				  <li><a class="dropdown-item link-secondary" href="<?php echo base_url().'sehatkontrol/ginjal'; ?>">Ginjal</a></li>
				  <li><a class="dropdown-item link-secondary" href="<?php echo base_url().'sehatkontrol/mulut'; ?>">Mulut</a></li>
				  <li><a class="dropdown-item link-secondary" href="<?php echo base_url().'sehatkontrol/dayatahantubuh'; ?>">Daya Tahan Tubuh</a></li>
				</ul>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url().'sehatkontrol/projecttentang'?>">Tentang Kami</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url().'sehatkontrol/projectkontak'?>">Kontak</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url().'sehatkontrol/login'?>">Login</a>
			  </li>
			  
			</ul>
		  </div>
		</div>
	  </nav>
	  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/57/06/13/5706134dde5164d7195bcc13363384db.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jagalah Kesehatanmu</h5>
        <p>Kesehatan adalah hal paling penting yang dibutuhkan oleh seseorang.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu68sWCPw3AdMl0I4Xnjv_IEd1bMAjOc5gZQ&usqp=CAU" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sehat Pangkal Pandai</h5>
        <p>Kesehatanmu dapat membuat aktivitasmu sehari-hari tidak terganggu.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4Tmh8I12v9jxlHBy4KZh-q4q7b3L9dlNZGQ&usqp=CAU" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kamu pasti ingin sehat</h5>
        <p>Orang mampu menikmati hidup apabila memiliki kesehatan yang baik.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

	<p class="text-center display-6" style="margin-top:1.5em;"><img src="<?php echo base_url().'sehatkontrol/gambarsayapkanan'; ?>" style="width: 60px; height: 60px;">Kategori<img src="<?php echo base_url().'sehatkontrol/gambarsayapkiri'; ?>" style="width: 60px; height: 60px;"></p>

	<table align="center" style="margin-top:1.5em;" cellspacing="50" cellpadding="30">

		<tr>
			<td onclick="document.location='<?php echo base_url().'sehatkontrol/mata'; ?>'">
			<div class="card-group card border-secondary mb-3" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
					<img src="<?php echo base_url().'sehatkontrol/gambarsharingan'?>" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					<div class="card-body">
					<h5>	
					<a class="stretched-link" href="<?php echo base_url().'sehatkontrol/mata'; ?>" style="text-decoration: none; color: black;">Mata</a></h5>
						
					</div>
					</div>
				</div>
				</div>
				
				
			</td>

				<td onclick="document.location = '<?php echo base_url().'sehatkontrol/kulit'; ?>';">
				<div class="card-group card border-secondary mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
						<img src="<?php echo base_url().'sehatkontrol/gambarkulit'?>" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><a class="stretched-link" href="<?php echo base_url().'sehatkontrol/mata'; ?>" style="text-decoration: none; color: black;">Kulit</a></h5>
							
						</div>
						</div>
					</div>
					</div>					
					
				</td>

			<td onclick="document.location = '<?php echo base_url().'sehatkontrol/ginjal'; ?>';">
				<div class="card-group card border-secondary mb-3" style="max-width: 540px;">
						<div class="row g-0">
							<div class="col-md-4">
							<img src="<?php echo base_url().'sehatkontrol/gambarginjal'?>" class="img-fluid rounded-start" alt="...">
							</div>
							<div class="col-md-8">
							<div class="card-body text-dark">
								<h5 class="card-title"><a class="stretched-link" href="<?php echo base_url().'sehatkontrol/ginjal'; ?>" style="text-decoration: none; color: black;">Ginjal</a></h5>
								
							</div>
							</div>
						</div>
						</div>					
			
			
			
			</td>
		</tr>

		<tr>
			<td onclick="document.location = '<?php echo base_url().'sehatkontrol/wajah'; ?>';">
				<div class="card-group card border-secondary mb-3" style="max-width: 540px;">
							<div class="row g-0">
								<div class="col-md-4">
								<img src="<?php echo base_url().'sehatkontrol/gambarwajah1'?>" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title"><a class="stretched-link" href="<?php echo base_url().'sehatkontrol/wajah'; ?>" style="text-decoration: none; color: black;">Wajah</a></h5>
									
								</div>
								</div>
							</div>
							</div>				
				
			</td>
			
			<td onclick="document.location = '<?php echo base_url().'sehatkontrol/dayatahantubuh'; ?>';">	
				<div class="card-group card border-secondary mb-3" style="max-width: 540px;">
								<div class="row g-0">
									<div class="col-md-4">
									<img src="<?php echo base_url().'sehatkontrol/gambarmilos'?>" class="img-fluid rounded-start" alt="...">
									</div>
									<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title"><a class="stretched-link" href="<?php echo base_url().'sehatkontrol/dayatahantubuh'; ?>" style="text-decoration: none; color: black;">Daya Tahan Tubuh</a></h5>
										
									</div>
									</div>
								</div>
								</div>			
				
			</td>
			
			<td onclick="document.location = '<?php echo base_url().'sehatkontrol/mulut'; ?>';">
					<div class="card-group card border-secondary mb-3" style="max-width: 540px;">
							<div class="row g-0">
								<div class="col-md-4">
								<img src="<?php echo base_url().'sehatkontrol/gambarmulut'?>" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title"><a class="stretched-link" href="<?php echo base_url().'sehatkontrol/mulut'; ?>" style="text-decoration: none; color: black;">mulut</a></h5>
									
								</div>
								</div>
							</div>
							</div>			
				
			</td>
		</tr>
	</table>

	<hr>

	<h1 class="text-center" style="margin-top:2.5em; margin: 2.5em;">Website Kesehatan</h1>

	<p class="text-lg-start" style="margin: 2.5em;">Website Kesehatan ini hadir untuk memberikan tips dan informasi mengenai kesehatan atau gaya hidup sehat untuk kegiatan hari-harimu. Disini, kamu dapat membaca berbagai artikel mulai dari tema Mata, Kulit, Wajah hingga Daya Tahan Tubuh tanpa takut hoax karena artikel-artikel ini berasal dari sumber-sumber terpercaya.</p>
	<p class="text-lg-start" style="margin: 2.5em;">Sehat itu seru lho, website kesehatan ini memiliki banyak fitur unik yang akan mendukung kesehatanmu. Kamu dapat mencari tahu atau mempelajari tentang penyakit dan apa yang harus dilakukan untuk menghadapinya.</p>
	<p class="text-lg-start" style="padding-bottom: 100px; margin: 2.5em;">Sesuai dengan visi dan misi, website kesehatan ini merupakan awal dari gerakan positif untuk mengajak masyarakat Indonesia menyadari bahwa sehat itu mudah. Yuk, jadi bagian dari visi ini!</p>

	<footer class="text-center text-lg-start bg-light text-muted">
		<!-- Section: Social media -->
		<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
		  <!-- Left -->
		 
		  <!-- Left -->
	  
		  <!-- Right -->
		  <div class="d-flex justify-content-end">
			<a href="<?php echo base_url().'sehatkontrol/projecttentang'; ?>" class="me-4 text-reset">
				Tentang Kami
			</a>
			<a href="<?php echo base_url().'sehatkontrol/projectkontak'; ?>" class="me-4 text-reset">
				Hubungi Kami
			</a>
			
		  </div>
		  <!-- Right -->
		</section>
		<!-- Section: Social media -->

	</footer>
</div>
<script src="<?=base_url();?>bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url();?>bootstrap/vendor/sweet-alert/sweetalert2.all.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>bootstrap/js/demo/sweet-alert.js"></script>
	<script src="<?=base_url();?>bootstrap/js/bootstrap.bundle.min.js/bootstrap.bundle.js" rel="stylesheet"></script>

</body>
</html>