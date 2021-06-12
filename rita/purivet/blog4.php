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
											<img width="20" height="400"  src="images/home/kuping.png" alt="" />
										</a>
											<h3>Panduan Mudah Membersihkan Kotoran Telinga Kucing</h3>
							
											
										</div>
										
								</div>
								
							</div>
						</div>

						</div>
							</div>
						</div>
<p aligh="justify"> 
							Merawat kebersihan kucing bukan sebatas rutin dimandikan, tapi kita juga perlu membersihkan kotoran telinga kucing. Sama halnya dengan manusia, secara rutin kita juga membersihkan telinga kita dari kotoran, kan? Telinga kucing juga mudah kotor.<br>

Apalagi jika ia sedang terkena kutu, kutu suka di tempat yang lembab, salah satunya adalah telinga. Kutu bisa membuang kotorannya di telinga kucing, kalau sudah begini, harus lebih ekstra dan rutin lagi dalam membersihkan kotoran telinga kucing.<br>

Bagi pet parents yang masih kebingungan bagaimana caranya membersihkan kotoran telinga kucing, simak panduan mudah di bawah ini:<br>
PERSIAPKAN PERALATANNYA<br>
Siapkan cairan pembersih telingan khusus hewan, kapas atau tisu dan cutton bud. Untuk cairan pembersih telinga kucing bisa pet parents dapatkan di Pet Shop Indonesia.  Salah satunya adalah Oxyfresh Pet Ear Cleaner, sedangkan untuk kapas, tisu dan cutton budnya bisa yang pet parents  gunakan sehari-hari.<br>
LANGKAH-LANGKAH MEMBERSIHKAN KOTORAN TELINGA KUCING<br>
1. Tetesi saluran telinga dengan cairan pembersih. Cairan pembersih telinga selain bisa dibeli pet shop juga bisa di dokter hewan yang menyediakan.<br>
2. Pijat-pijat dengan lembut bagian dasar telinga agar cairan pembersih dapat menyebar dengan rata ke seluruh bagian telinga.<br>
3. Biarkan kucing menggeleng-gelengkan kepala agar sisa cairan pembersih dan kotoran dapat keluar.<br>
4. Bersihkan sisa-sisa cairan pembersih dan kotoran yang terdapat di telinga bagian luar dengan kapas atau tisu. Bersihkan celah/lekukan yang terdapat pada telinga dengan menggunakan cotton bud. Hati-hati saat membersihkan lubang/saluran telinga. Bila ragu-ragu atau takut menyebabkan luka pada telinga kucing, sebaiknya  bawa kucing anda ke dokter hewan. Perhatikan atau  tanyakan cara membersihkan telinga kucing yang baik dan aman  pada dokter hewan tersebut.<br>
5. Tindakan pembersihan telinga diulang hingga semua kotoran telah keluar. Pada saat awal, setidaknya telinga perlu dibersihkan setiap hari selama beberapa hari berturut-turut agar semua kotoran yang terdapat dalam telinga bisa keluar.<br>
Bersihkan telinga secara rutin seperti yang dianjurkan . Dalam keadaan normal telinga kucing biasanya dibersihkan 2-4 minggu sekali atau bila terlihat ada kotoran. Telinga bersih, tentu kucing akan merasa lebih nyaman dan terhindar dari penyakit lainnya.<br> </div>
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