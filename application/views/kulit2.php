<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kulit</title>
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
 		
 		<div class="text"><h1> 3 Buah Dan Sayuran Yang Dapat Menyebabkan Kulit Tampak Cerah Merona </h1>
 			
            

 			
 		</div>
 		<div class="image-container"><img src="<?php echo base_url().'sehatkontrol/gambarbuahsayur'?>" align="left" style="margin: 40px; width: 400px; height: 350px;"><br></div>
 		<div class="text">  <p><br><br>
	1. Jeruk termasuk salah satu buah terbaik yang bisa digunakan untuk mendapatkan kulit cerah dalam waktu relatif singkat
	Jeruk kaya akan kandungan vitamin C yang dapat membantu mencerahkan kulit. Kandungan nutrisi jeruk mampu mencerahkan bekas luka, menghidrasi kulit, dan meningkatkan elastisitas kulit. Cobalah untuk mengonsumsi jeruk secara rutin, baik dikonsumsi langsung maupun dibuat jusnya. Lebih baik pilih yang alami, bukan jus kemasan yang sudah melewati beberapa tahap proses pengolahan karena akan kehilangan nutrisi aslinya. Selain jeruk buah, kamu juga bisa manfaatkan jeruk nipis ataupun jeruk lemon untuk diperas airnya lalu diseduh dengan air hangat untuk diminum tiap pagi.<br><br>
	2. Meskipun punya kandungan lemak yang cukup banyak, buah alpukat punya banyak nutrisi untuk kesehatan kulit
	Alpukat merupakan buah yang kaya akan manfaat. Dalam satu buah alpukat terkandung sekitar 4,2 mg vitamin E dan 12 mg vitamin C. Artinya, jika kamu makan satu buah alpukat, kamu bisa mendapatkan kedua vitamin yang dibutuhkan oleh kulit. Di dalam alpukat juga terkandung lemak baik yang dapat memberikan kelembapan serta menghidrasi kulit, sehingga bikin kulitmu terlihat lebih muda dan lebih sehat.<br><br>
	3. Brokoli menjadi sayuran pertama pemegang peringkat sayuran bernutrisi, kaya vitamin dan nutrisi untuk cerahkan kulit
	Brokoli merupakan salah satu sayuran yang mengandung vitamin C tinggi. Dalam 100 gram brokoli mengandung 89,2 mg vitamin C. Seperti makanan yang mengandung vitamin C lainnya, brokoli juga dapat melindungi kulit dari bahaya radikal bebas yang dapat menyebabkan kulit keriput dan merusak DNA dalam sel-sel kulit. Jika ingin memasaknya, pastikan tambahan garamnya nggak berlebihan agar nggak mengurangi nutrisi yang terkandung di dalamnya.<br><br><br><br></p>

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


 	<footer>
		<ul>
	
			<li><a href="projecttentang.html">Tentang Kami</a></li>
			<li><a href="projectkontak.html">Hubungi Kami</a></li>

		</ul>
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