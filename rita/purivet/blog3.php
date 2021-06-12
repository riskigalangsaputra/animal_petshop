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
											<img width="20" height="400"  src="images/home/travelling.png" alt="" />
										</a>
											<h3>Tips Traveling Bersama Peliharaan Biar Gak Repot!</h3>
							
											
										</div>
										
								</div>
								
							</div>
						</div>

						</div>
							</div>
						</div>
<p aligh="justify"> 
							Satu lagi nih yang bikin pet parents bingung selama punya anabul (anak berbulu).. bikin nggak tega kalau harus pergi terlalu lama atau pergi jauh. Hmmm.. tapi kan pet parents juga perlu piknik, gimana dong? Pet parents bisa memilih menitipkan anabul di penitipan hewan (pet hotel) atau traveling bersama peliharaan kita, kok!<br>

Kalau memilih untuk traveling bersama peliharaan, paling utama perlu diperhatikan, pastikan bahwa akomodasi memperbolehkan pengunjungnya membawa hewan. Banyak hotel dan penerbangan yang memiliki kebijakan agar pengunjungnya boleh membawa hewan, jadi pastikan terlebih dahulu, ya!<br>

Setelah kedua hal ini tak ada masalah, berikut tips traveling bersama peliharaan yang perlu diperhatikan:<br>
SIAPKAN PET CARRIER/ KERANJANG HEWAN
Pet carrier  atau keranjang hewan akan membuat pet parents  lebih mudah mengondisikan anabul demi keamaannya. Jangan gunakan kardus, karena kardus mudah rusak dan tidak aman baginya. Ada tempat khusus yang membuatnya merasa aman dan nyaman meski berada di pet carrier. Untuk perjalanan melalui udara, ada beberapa persyaratan pet carrier yang harus dipenuhi. Jadi sebelum membeli pet carrier, pastikan sudah sesuai persyaratan, ya! <br>

1. BERIKAN MAKAN/MINUM SEBELUM BERANGKAT<br>
Salah satu sebab rewelnya anabul tentu karena lapar, nah biar enggak repot, beri makan dan minum sebelum berangkat, ya.<br><br>

2. BERANGKAT SETELAH ANABUL PUP DAN KENCING<br>
Sebelum berangkat, pastikan anabul sudah pup dan keincing ya. Bayangkan betapa repotnya jika anabul pup dan kencing, kita harus membersihkannya saat perjalanan. Untuk itu, tunggulah anabul sekitar 30 menit sebelum berangkat untuk pup dan kencing sebelum berangkat ke tempat tujuan<br><br>

3. JANGAN PERNAH MENINGGALKAN ANABUL DALAM MOBIL <br>
Mobil panas dengan cepat dan hanya dalam hitungan menit hidup anabul pet parents bisa berada dalam bahaya.<br>

Kalau 4 tips traveling bersama peliharaan di atas sudah pet parents lakukan, perjalanan akan terasa lebih mudah dan menyenangkan pastinya. Anabul aman, pet parents tetap piknik dengan senang.<br> </div>
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