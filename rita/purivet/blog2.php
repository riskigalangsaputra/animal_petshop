<?php 
include ('koneksi.php');

	session_start();
	if (isset($_GET['keluar'])) {
		session_unset();
	}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ANIMAL PETSHOP & GROOMING SEKTOR 5</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="gaya.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

<?php 
	if (isset($_SESSION['nama'])) {
		include ('library/navbarlogin.php');
	}
	else {
		include('library/navbar.php');
	}
 ?>	


		<section>

		<div class="container">
				<div class="col-sm-15 padding-center">
					<div class="makanan">
						<h2 class="title text-center">TIPS & TRICK </h2>
						<section>
						<div id="contact-page" class="container">
    						<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-11"> 
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<center><img width="30" height="400" src="images/home/kanjing.png" alt="" /></center>
											</a>
											<h3>Cara Ampuh Membasmi Kutu Anjing dengan Tuntas</h3>
							
											
										</div>
										
								</div>
								
							</div>
						</div>

						</div>
							</div>
						</div>
<p aligh="justify"> 
							Satu masalah lagi yang bikin pet parents bingung kalau memiliki anjing adalah ketika kutu sudah mulai ada di badannya. Sayangnya, kalau sudah satu anjing kena, kita juga harus membasmi kutu anjing yang ada di lingungannya agar usaha kita tidak sia-sia.

Kutu sendiri adalah parasit eksternal yang menyedot darah anjing Anda dan juga dapat menularkan beberapa penyakit pada anjing kita. Biar nggak bingung lagi, ikuti cara ampuh membasmi kutu anjing dengan tuntas di bawah ini: <br>
1. GUNAKAN SAMPO ANTI KUTU UNTUK ANJING YANG SUDAH MENYEBAR SELURUH BADAN<br>
Memandikan anjing kesayangan pet parents secara teratur menggunakan sampo anti kutu dapat mengurangi kutu yang terdapat pada anjing anda. Pastikan Anda memilih sabun atau sampo antikutu yang memang diformulasikan untuk anjing. Biarkan sampo melekat di bulu anjing selama paling tidak 10 menit sebelum membilasnya dengan air hangat. Sampo antikutu biasanya mengandung piretrin, sejenis bahan kimia yang dapat membasmi kutu.<br><br>

2. GUNAKAN KALUNG ANTI KUTU UNTUK ANJING<br>
Bila sudah dimandikan, untuk pencegahan selanjutnya bisa dengan kalung anti kutu untuk anjing. Kalung direkatkan di lehernya, penggunaan kalung anti kutu yang mengandung amitraz dapat digunakan sebagai membunuh kutu dan pencegahan infestasi ulang  kutu hingga 3 bulan.<br><br>
3. MEMBERIKAN OBAT ANTI KUTU<br>
Pemberian obat anti kutu pada anjing setiap satu bulan sekali merupakan salah satu pilihan yang paling efektif dan paling banyak digunakan untuk mencegah serangan kutu pada anjing. konsultasikan kondisi anjing anda kepada dokter hewan sebelum memberikan obat anti kutu.<br><br>
4. MEMBASI KUTU ANJING DI LINGKUNGAN SEKITAR<br>
Kutu anjing bisa dari lingkungannya, apalagi kalau ia di lingkungan outdoor. Kalau anjing berada di outdoor, sebaiknya ia diberi kalung anti kutu. Selain itu pet parents harus membersihkan lingkungan dari kutu beserta telur-telurnya agar tidak lagi hinggap di badan anjing. Salah satunya menggunakan spray anti kutu, diberikan ke seluruh bagian di rumah yang memungkinkan perkembangbiakan kutu.<br>

Perlu waktu dan kesabaran untuk membasmi kutu anjing, tapi jangan khawatir pet parents. Selalu ada solusi setiap permasalahan, rawat ia dengan kasih sayang, maka pet parents tak lagi merasa kesusahan.<br><br> </div>
							<a  class="btn btn-primary" href="index.php">kembali</a>
						
						</div>
					</div>
				</div>
			</div>
		</div>



					
				</div>
			</div>
		</div>
	</section>
	
	
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">©2021 animal petshop. All rights reserved.</p>
					<p class="pull-right"> <span><a target="_blank" href=index.html></a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>