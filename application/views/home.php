<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Sehat</title>

	<style type="text/css">
		
		#bgcolor {
			background-color: black ;
			width: 100%;
			height: 100px;
		}

		.container {
			margin:auto;
		}

		body {
	
			margin: auto;

		}

		img {
			width: 100%;
			height: 680px;

		}

		.menu {
			
			background: black;
			font-family: tahoma;
			font-weight: bold;
			font-size: 20px;
			height: 70px;
			width: 100%;
			line-height: 0%;
			padding-top: 10px;


		}

		label {
			font-family: comic sans ms;
			font-size: 20pt;
			color: white;
			margin: 10px;
			padding: 5px;
			float: left;
			padding-top: 20px;
		}

		.menu ul {
			margin: 0px;
			padding: 5px;
			background: none;
			display: block;
			float: right;
			padding-top: 10px;

		}

		.menu ul li {
			list-style: none;
			display: inline-block;

		}

		.menu ul li a {
			display: block;
			text-decoration: none;
			padding: 20px;
			color: #ddd;

		}

		.menu ul li a:hover {
			display: block;
			color: green;
			background: #222;
			box-shadow: inset 0px 0px 5px #000;
		}

		.menu ul li .dropdown {
			display: none;
		}

		.menu ul li:hover .dropdown {
			display: block;
			background: black;
			position: absolute;
			padding: 10px;
		}

		.menu ul li:hover .dropdown li {
			display: block;
		}

		.menu ul li:hover .dropdown a {
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 5px;
		}

		.menu ul li:hover .dropdown a:hover {
			background: #222;
			box-shadow: inset 0px 0px 5px #000;
		}

		tr, td {
			border: 1px solid #d6d6d6;
			font-size: larger;

		}

		tr, td{			
			height: auto;
			width: 200px;
			text-align: center;
			background-color: #ededed;

		}

		td:hover {
			background-color: #03fcec;
		}

		hr {
			margin-top: 100px;
			margin-bottom: 40px;
		}

		.font1 {
			font-size: xx-large;
			text-align: center;
		}

		.font2 {
			font-family: Garamond;
			margin-left: 200px;
			margin-right: 200px;
			margin-top: 50px;
			margin-bottom: 50px;
			font-size: large;
		}

		footer {
			background-color: #edebeb;
			text-align: right;
			border-right: 1px solid #b5b5b5;
			font-family: tahoma;
			font-weight: bold;
			font-size: 15px;
			height: 30px;
			width: 100%;
			line-height: 0%;
			padding-top: 10px;
			bottom: 0;
		
		}

		footer ul {
			margin: 0px;
			padding: 5px;
			background: none;
			display: block;
			float: right;

		}

		footer ul li {
			list-style: none;
			display: inline-block;

		}

		footer ul li a {
			display: block;
			text-decoration: none;
			padding: 10px;
			color: #a3a0a0;

		}

	</style>
</head>
<body>

<div class="container">

	<div class="menu">
		<label>Kesehatan</label>
		<ul>
			<li><a href="projectweb.html">Home</a></li>
			<li><a href="#">Kategori</a>
				<ul class="dropdown">
					<li><a href="mata.html">Mata</a></li>
					<li><a href="wajah.html">Wajah</a></li>
					<li><a href="kulit.html">Kulit</a></li>
					<li><a href="ginjals.html">Ginjal</a></li>
					<li><a href="mulut.html">Mulut</a></li>
					<li><a href="dayatahantubuh.html">Daya Tahan Tubuh</a></li>
				</ul>
			</li>
			<li><a href="projecttentang.html">Tentang Kami</a></li>
			<li><a href="projectkontak.html">Kontak</a></li>
		</ul>
	</div>

	<img src="https://i.pinimg.com/originals/57/06/13/5706134dde5164d7195bcc13363384db.jpg">

	<p class="font1"><img src="sayapkanan.jpg" style="width: 60px; height: 60px;">Kategori<img src="sayapkiri.jpg" style="width: 60px; height: 60px;"></p>

	<table align="center" cellspacing="50" cellpadding="30">

		<tr>
			<td onclick="document.location = 'mata.html';"><img src="sharingann.jpg" style="width: 55px; min-width: 20px; height: 55px; position: relative; right: 50px;"><a href="mata.html" style="position: relative; bottom: 23px; right: 15px; text-decoration: none; color: black;" target="_blank">Mata</a></td>
			<td onclick="document.location = 'kulit.html';"><img src="kulit.jpg" style="width: 55px; min-width: 20px; height: 55px; position: relative; right: 60px;"><a href="kulit.html" style="position: relative; bottom: 23px; right: 15px; text-decoration: none; color: black;" target="_blank">Kulit</a></td>
			<td onclick="document.location = 'ginjals.html';"><img src="ginjal.jpg" style="width: 55px; min-width: 20px; height: 55px; position: relative; right: 60px;"><a href="ginjals.html" style="position: relative; bottom: 23px; right: 15px; text-decoration: none; color: black;" target="_blank">Ginjal</a></td>
		</tr>
		<tr>
			<td onclick="document.location = 'wajah.html';"><img src="wajah.jpg" style="width: 55px; min-width: 20px; height: 55px; position: relative; right: 60px;"><a href="wajah.html" style="position: relative; bottom: 23px; right: 15px; text-decoration: none; color: black;" target="_blank">Wajah</a></td>
			<td onclick="document.location = 'dayatahantubuh.html';"><img src="milos.jpg" style="width: 55px; min-width: 20px; height: 55px; position: relative; right: 30px;"><a href="dayatahantubuh.html" style="position: relative; bottom: 23px; right: 15px; text-decoration: none; color: black;" target="_blank">Daya Tahan Tubuh</a></td>
			<td onclick="document.location = 'mulut.html';"><img src="mulut.jpg" style="width: 55px; min-width: 20px; height: 55px; position: relative; right: 60px;"><a href="mulut.html" style="position: relative; bottom: 23px; right: 15px; text-decoration: none; color: black;" target="_blank">Mulut</a></td>
		</tr>
	</table>

	<hr>

	<h1 align="center">Website Kesehatan</h1>

	<p class="font2">Website Kesehatan ini hadir untuk memberikan tips dan informasi mengenai kesehatan atau gaya hidup sehat untuk kegiatan hari-harimu. Disini, kamu dapat membaca berbagai artikel mulai dari tema Mata, Kulit, Wajah hingga Daya Tahan Tubuh tanpa takut hoax karena artikel-artikel ini berasal dari sumber-sumber terpercaya.</p>
	<p class="font2">Sehat itu seru lho, website kesehatan ini memiliki banyak fitur unik yang akan mendukung kesehatanmu. Kamu dapat mencari tahu atau mempelajari tentang penyakit dan apa yang harus dilakukan untuk menghadapinya.</p>
	<p class="font2" style="padding-bottom: 100px;">Sesuai dengan visi dan misi, website kesehatan ini merupakan awal dari gerakan positif untuk mengajak masyarakat Indonesia menyadari bahwa sehat itu mudah. Yuk, jadi bagian dari visi ini!</p>

	<footer>
		<ul>
	
			<li><a href="projecttentang.html">Tentang Kami</a></li>
			<li><a href="projectkontak.html">Hubungi Kami</a></li>

		</ul>
	</footer>
</div>

</body>
</html>