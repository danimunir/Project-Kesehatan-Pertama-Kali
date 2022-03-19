<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mata</title>
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

 <div id="background">
 	
 	<div id="textbox" style="margin-top:2.5em; margin: 2.5em;">
 		
 		<div class="text" ><h1> Cara Mengatasi Iritasi Mata </h1>
 			Hindari menyentuh area mata. Salah satu cara mengobati iritasi mata untuk mempercepat proses pemulihan adalah menghindari menyentuh area mata.Termasuk setelah Anda mencuci kedua tangan dengan sabun dan air mengalir sampai bersih. 
            Pasalnya, minyak dan kotoran yang mungkin masih menempel di jari atau di bawah kuku jari dapat memperburuk gejala mata merah yang terjadi.
            Bahkan, bukan tidak mungkin menimbulkan cedera pada permukaan bola mata Anda 
            

 			
 		</div>
 		<div class="image-container"><img src="<?php echo base_url().'sehatkontrol/gambarmata1'?>" align="left" style="margin: 40px; width: 400px; height: 350px;"><br></div>
 		<div class="text">  Gunakan kompres dingin
Kompres dingin juga dapat digunakan sebagai cara mengobati iritasi mata. 
Caranya, bungkus beberapa buah es batu dalam kain lembut dan bersih. Lalu, tempatkan pada area mata yang mengalami iritasi.
Rasa sejuk yang berasal dari es batu dapat meringankan gejala mata iritasi, seperti mata bengkak, nyeri, dan kemerahan. 
Selain kompres dingin menggunakan kain, Anda juga bisa mencuci mata dengan air hangat atau dingin secara perlahan.
 			
Istirahat dan konsumsi makanan sehat
Cara mengobati iritasi mata agar lebih cepat pulih lainnya adalah istirahat yang cukup dan konsumsi makanan sehat. 
Konsumsilah makanan yang mengandung asam lemak tinggi, seperti ikan, sayuran hijau, kacang-kacangan, untuk mempercepat penyembuhan mata kering dan mata merah.
Anda juga perlu minum banyak air putih untuk memulihkan mata iritasi.
Pakai obat iritasi mata tetes
Penggunaan obat tetes mata dapat menjadi pilihan cara mengobati iritasi mata sesuai penyebabnya. 
Obat tetes mata adalah jenis cairan yang digunakan untuk meredakan berbagai gejala mata iritasi, seperti mata kering, mata merah, mata terasa gatal, alergi mata, atau sakit mata.
Pastikan Anda berkonsultasi dengan dokter sebelum menggunakan obat tetes mata sesuai dengan mata iritasi yang dialami.
Berikut adalah obat iritasi mata yang mungkin diresepkan oleh dokter atau Anda bisa memperolehnya di apotek:
Obat iritasi mata berupa air buatan. Air buatan (artificial tears) dapat digunakan untuk mengurangi keluhan mata iritasi mata, seperti mata gatal dan kering. 

Obat iritasi mata akibat alergi. Anda bisa menggunakan obat tetes mata yang mengandung antihistamin. 

Obat iritasi mata akibat infeksi bakteri. Anda bisa meringankan gejala dengan obat tetes mata antibiotik.

 		</div>


 	</div>


 <div id="textbox2">
 	
 	<div class="text2">
 		<form name="commentsection" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 		<table>
 			<tr>
 				<td>Masukkan Nama </td>
 				<td><input type="text" name="nama" maxlength="50"></td>
 			</tr>
 			<tr>
 				<td>Komentar </td>
 				<td><input type="text" name="comments" cols="45" rows="5"></td>
 				<td><input type="submit" name="submit" value="Submit"></td>
 			</tr>
 		</table>
 	</form>
 	<?php  

 	$nama=$comments="";

 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nama"])) {
			echo "<span class=\"error\">Isi namanya dulu dong<br></span>";
		}

		else {
		
			$nama	  = val($_POST['nama']);
			$comments = val($_POST['comments']);
		}
		
	}

	function val($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	 ?>
	 <?php 

	 echo "Nama     :" . $nama;
	 echo "<br>";
	 echo "Komentar : " . $comments;
	  ?>
	  <!--|- Urutan Form : Form -> Post -> Echo -|-->
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