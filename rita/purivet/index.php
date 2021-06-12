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


	
	<section id="slider"><!--slider-->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Animal</span>Petshop</h1>
									
								</div>
								<div class="col-sm-6">
									<img weight= "50" height="50" src="images/home/pet.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Animal</span>Petshop</h1>
									
								</div>
								<div class="col-sm-6">
									<img weight= "50" height="50" src="images/home/pettt.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Animal</span>Petshop</h1>
								</div>
								<div class="col-sm-6">
									<img weight= "50" height="50"  src="images/home/gambar.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

		<section>


			<div class="container">
				<div class="col-sm-17 padding-center">
					<div class="makanan"><!--makanan-->
						<h2 class="title text-center">Animal Petshop</h2>
						<section>
						<div id="contact-page" class="container">
    						<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-4"> 
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img width="2" height="200" src="images/home/petshop.jpg" alt="" />
											
										</div>
									
								</div>
								
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="2" height="200" src="images/home/klinik.jpg" alt="" />
										
									</div>
									
								</div>
							</div>
						</div>


						
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="0" height="200" src="images/home/shop1.jpg" alt="" />
										
									</div>
									
								</div>
							</div>
						</div>

						
							

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="20" height="200"  src="images/home/aa.jpg" alt="" />
										
									</div>
									
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="20" height="200"  src="images/home/bb.jpg" alt="" />
										
									</div>
									
									
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="2" height="200" src="images/home/cc.jpg" alt="" />
										
									</div>
									
								</div>
							</div>
						</div>
						
						
					</div><!--features_items-->


					<div class="container">
				<div class="col-sm-15 padding-center">
					<div class="makanan">
						<h2 class="title text-center">TIPS & TRICK </h2>
						<section>
						<div id="contact-page" class="container">
    						<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-6"> 
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img width="50" height="300" src="images/home/kucing.png" alt="" />
											</a>
											<h3>Gimana Sih Cara Mengatasi Kitten Mogok Makan?</h3>
							<p>Anak Kucing Mogok Makan , Kitten Mogok Makan , Kucing Gak Mau Makan , Kucing Tidak Mau Makan</p>
							<a  class="btn btn-primary" href="blog1.php">Read More</a>
											
										</div>
										
								</div>
								
							</div>
						</div>

						<div class="col-sm-5">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="50" height="300" src="images/home/kanjing.png" alt="" />
											</a>
											<h3>Cara Ampuh Membasmi Kutu Anjing dengan Tuntas</h3>
							<p> Kutu Anjing , Membasmi Kutu Anjing , Mengatasi Kutu Anjing , Menghilangkan Kutu Anjing , Mengobati Kutu Anjing</p>
							<a  class="btn btn-primary" href="blog2.php">Read More</a>
										
									</div>
									
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="20" height="200"  src="images/home/travelling.png" alt="" />
										</a>
											<h3>Tips Traveling Bersama Peliharaan Biar Gak Repot!</h3>
							<p>Hewan Peliharaan Pet Carrier , Traveling , Traveling Bersama Anjing , Traveling Bersama Kucing , Traveling Bersama Peliharaan , Traveling Bersama Pet</p>
							<a  class="btn btn-primary" href="blog3.php">Read More</a>
									</div>
									
								</div>
							</div>
						</div>

						<div class="col-sm-5">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img width="20" height="200"  src="images/home/kuping.png" alt="" />
										</a>
											<h3>Panduan Mudah Membersihkan Kotoran Telinga Kucing</h3>
							<p>HKotoran Kucing , Kotoran Telinga , Membersihkan Kotoran Kucing , Membersihkan Kotoran Telinga Kucing , Membersihkan Telinga Kucing , Pet Ear Cleaner</p>
							<a  class="btn btn-primary" href="blog4.php">Read More</a>
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
			</div>
		</div>
	</section>
	
	
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">©2021 animal petshop. All rights reserved.</p>
					
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