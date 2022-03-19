<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kontak</title>
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
	<p align="center" style="font-family: Verdana; font-size: xx-large; margin-top: 100px;">Profil dan Kontak Kami</p>

	<div class="text1">
<div class="row row-cols-1 row-cols-md-3 g-4">		
	<div class="card mb-3" style="max-width: 540px; margin-top: 2.5em">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url().'sehatkontrol/gambardani'; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text">Nama : Dhani Munir Supriyadi <br>
			  Nim  &nbsp;&nbsp;: 19200852 <br>
			  Email : danimmunir1@gmail.com <br>
			  No. telp : 0895326168339 <br>
			  Instagram :  - @bee.motee
			  <p style="margin-left: 110px; margin-top: 2px;"> - @munir.pejuang</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url().'sehatkontrol/gambardoni'; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text"> Nama : Dhoni Hanif Supriyadi <br>
			  Nim  &nbsp;&nbsp;: 19200851 <br>
			  Email : dhonihanif354@gmail.com <br>
			  No. telp : 0895326168335 <br>
			  Instagram :  @Killua_dhoni354 <br>

      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url().'sehatkontrol/gambarwahyu'; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text">Nama : Wahyu Nur Agustusanto <br>
			  Nim  &nbsp;&nbsp;: 19200827 <br>
			  Email : wahyunur988@gmail.com <br>
			  No. telp : 085215163415 <br>
			  Instagram :  @whyunra <br>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url().'sehatkontrol/gambarmutia'; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text">Nama : Mutia Azhari Rahma <br>
			  Nim  &nbsp;&nbsp;: 19200303 <br>
			  Email : rahmamutiaazhari@gmail.com <br>
			  No. telp : 087873196331 <br>
			  Instagram :  @mutiaazharri <br>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url().'sehatkontrol/gambarasep'; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text">Nama : Asep Burhan <br>
			  Nim &nbsp;&nbsp;: 19200610 <br>
			  Email : asepbukhori0711@gmail.com <br>
			  No. telp : 081386758525 <br>
			  Instagram :  @asp_07 <br>
      </div>
    </div>
  </div>
</div>


        
<div>

<div class="d-flex justify-content-end">
			<a href="<?php echo base_url().'sehatkontrol/projecttentang'; ?>" class="me-4 text-reset" style="margin-top: 15em;"> 
				Tentang Kami
			</a>
			<a href="<?php echo base_url().'sehatkontrol/projectkontak'; ?>" class="me-4 text-reset" style="margin-top: 15em;">
				Hubungi Kami
			</a>
			
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