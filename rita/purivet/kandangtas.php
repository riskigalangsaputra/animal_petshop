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
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="kalung.php">Kalung </a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="mainan.php">Mainan</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="kandangtas.php">Kandang dan Tas</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="perlengkapan.php">Perlengkapan Makanan</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="tempattidur.php">Tempat Tidur</a></h4>
								</div>
							</div>
							
						</div><!--/category-productsr-->
						
						
						
					</div>
				</div>


	<section>
		<div class="container">
				<div class="col-sm-9 padding-center">
					<div class="makanan"><!--makanan-->
						<h2 class="title text-center">Kandang dan Tas</h2>
						

<?php
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}


		//connection
		$koneksi = new mysqli('localhost', 'root', 'admin', 'animal_petshop');

		$sql = "select *from barang WHERE jenis_barang = 'aksesoris' AND kategori='kandang dan tas'";
		$query = mysqli_query($koneksi, $sql);
		
		$inc = 4;
		while($data = mysqli_fetch_array($query)){
			$inc = ($inc == 4) ? 1 : $inc + 1; 
			if($inc == 1) echo "";  
			?>
						

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
							<img width="20" height="300" src= "../admin/pages/gambar/<?php
                                			echo $data ['gambar'];?>" 
                                			?>
											<p><?php echo $data['nama_barang'];
											?></p>
											<p>Rp. <?php echo $data['harga'];
											?></p>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">

									
									<li class="ctr"><form method="GET" action="product-details.php"><input type="hidden" name="id" value="<?php echo $data['id_barang'];?>">
                    					<button  rel="tooltip" title="Lihat File" data-placement="top" class="btn btn-primary">
                    					<i class="fa fa-plus-square"> </i> View</button></form>
               						 </li>
               						 
									<li class="ctr"><form method="GET"><a href="add_cartass.php?id=<?php echo $data['id_barang']; ?>"> 
									<button rel="tooltip" title="add to cart" data-placement="top" class="btn btn-primary">
                    					<i class="fa fa-plus-square"> </i>Add to cart </a></button></form>
               						 </li>
               						 
						</ul>
								</div>
							</div>
						</div>
			<?php
		}
		if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
		if($inc == 2) echo "<div></div><div></div></div>"; 
		if($inc == 3) echo "<div></div></div>";
		
		//end product row 
		?>

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
	