<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wajah</title>
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
			  
			</ul>
		  </div>
		</div>
	  </nav>
 <div id="background">
 	
 	<div id="textbox" style="margin-top:2.5em; margin: 2.5em;">
 		
 		<div class="text"><h1> Wajah Kusam </h1>
 			
            

 			
 		</div>
 		<div class="image-container"><img src="<?php echo base_url().'sehatkontrol/gambarwajahkusam'?>" align="left" style="margin: 40px; width: 400px; height: 350px;"><br></div>
 		<div class="text"> 
 			Kusam merupakan istilah yang menggambarkan kondisi kulit yang tidak segar, tidak bercahaya, dan warnanya tidak merata.Kulit kusam bisa disebabkan oleh beberapa hal, dan mengetahui penyebabnya sejak awal bisa membantu kita mencari solusi demi mendapatkan kulit yang bercahaya.
 		 kusam bisa disebabkan oleh beberapa hal, dan mengetahui penyebabnya sejak awal bisa membantu kita mencari solusi demi mendapatkan kulit yang bercahaya
				<br>
				Kulit kusam biasanya ditandai dengan ciri-ciri kulit yang terlihat tidak sehat, lelah dan menonjolkan ketidaksempurnaan di wajah. Kulit kusam juga membuat wajah menjadi tidak terlihat cerah dan glowing ketika terpapar cahaya.
				<br><br>
				<b>Cara merawat agar wajah agar tidak kusam</b><br>
				<b>1. Istirahat yang cukup</b>
				Tidur cukup dapat membantu mengoptimalkan regenerasi kulit. Kurang tidur dapat menghambat proses regenerasi sel kulit dan produksi kolagen. Hal tersebut menyebabkan kulit terlihat kusam.

Beristirahat cukup dapat membantu mengembalikan kesehatan kulit. Oleh sebab itu, beristirahat lah dengan cukup untuk menjaga kesehatan tubuh dan kesehatan kulit Anda.
<br>
				<b>2. Rajin mencuci wajah maksimal 2x sehari</b>
				Setelah beraktivitas seharian, tentu debu dan kotoran menempel di wajah. Mencuci wajah merupakan salah satu cara mengangkat kotoran dan debu serta mencegah agar wajah tidak kusam.
				<br>
				<b>3. Rajin berolahraga</b>
				Olahraga juga dapat membantu tubuh rileks dan terhindar dari stres. Stres merupakan salah satu faktor pemicu kulit kusam. Ini karena ketika seseorang sedang stres, aliran darah menuju wajah akan berkurang. Hal tersebut yang memicu kulit wajah menjadi kusam.
				<br>
				<b>4. Konsumsi makanan sehat</b>
				Mulai lah untuk mengonsumsi sayur dan buah. Sayur dan buah kaya akan vitamin dan mineral yang sangat dibutuhkan oleh kulit. Selain itu, kandungan vitamin C dan nutrisi penting lainnya dapat mencerahkan kulit hingga mencegah penuaan dini.
				<br>
				<b>5. Konsumsi air putih yang cukup</b>
				Mengonsumsi air putih dapat membantu mencukupi cairan dalam tubuh. Kurangnya konsumsi air putih dapat membuat kulit terlihat kusam dan kering.
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


<<div class="d-flex justify-content-end">
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