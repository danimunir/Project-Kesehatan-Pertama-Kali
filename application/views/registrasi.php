<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="shortcut icon" href="logobsi.png">


    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>bootstrap/css/bootstrap-utilities.css" rel="stylesheet">

</head>

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
      <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Registrasi</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>

                                <form class="user" method="post" action="<?= base_url('sehatkontrol'); ?>">
                                    <div class="form-group">
                                        
                                        <?= form_error(
                                            'username',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <div class="form-group">
                                    <input type="username" class="form-control form-control-user" id="username" placeholder="Username" name="username">
                                        <?= form_error(
                                            'username',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    <input type="nama_lengkap" class="form-control form-control-user" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
                                        <?= form_error(
                                            'nama_lengkap',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                        <input type="tempat_lahir" class="form-control form-control-user" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir">
                                        <?= form_error(
                                            'tempat_lahir',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                         <input type="tanggal_lahir" class="form-control form-control-user" id="tanggal_lahir" placeholder="Tanggal Lahir" name="tanggal_lahir">
                                        <?= form_error(
                                            'tanggal_lahir',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                         <input type="jenis_kelamin" class="form-control form-control-user" id="jenis_kelamin" placeholder="Jenis Kelamin" name="jenis_kelamin">
                                        <?= form_error(
                                            'jenis_kelamin',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                         <input type="alamat" class="form-control form-control-user" id="alamat" placeholder="Alamat" name="alamat">
                                        <?= form_error(
                                            'alamat',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                         <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error(
                                            'password',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                        


                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Menjadi Member
                            </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?=
                                                            base_url('sehatkontrol/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                            Sudah Menjadi Member?<a class="small" href="<?= base_url().'sehatkontrol/login'; ?>"> Login!</a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>

            <div class="d-flex justify-content-end">
			<a href="<?php echo base_url().'sehatkontrol/projecttentang'; ?>" class="me-4 text-reset" style="margin-top: 15em;"> 
				Tentang Kami
			</a>
			<a href="<?php echo base_url().'sehatkontrol/projectkontak'; ?>" class="me-4 text-reset" style="margin-top: 15em;">
				Hubungi Kami
			</a>
			
		  </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
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