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
	<section id="advertisement">
		<div class="container">
			<img weight= "100" height="200" src="images/home/anjing.gif" alt="" />
		</div>
	</section>

						
						
				<section>
				<?php
						$sql = 'select *from berita';
						$query = mysqli_query ($koneksi, $sql);
						while ($data = mysqli_fetch_assoc($query)){


						?>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">		
					</div>
				</div>
				<div class="col-sm-12">
					<div class="blog-post-area">
						<h2 class="title text-center">Seputar Info Hewan</h2>
						<div class="single-blog-post">
							
							<img width="300" height="400" src= "../admin/pages/gambar/<?php
                                			echo $data ['gambar'];?>"

                                		?>
											<p><?php echo $data['judul_berita'];
											?></p>
											
										</div>
										<form method="POST" action="bacaberita.php"><input type="hidden" name="id" value="<?php echo $data['id_barang'];?>">
                    					<button  rel="tooltip" title="Lihat File" data-placement="top" class="btn btn-primary">
                    					<i class="btn btn-primary"> </i> Baca Selengkapnya</button></form>
               						 </a>
							
						</div>
						
					</div>
				</div>
			</div>
			<?php
					}
					?>

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
	