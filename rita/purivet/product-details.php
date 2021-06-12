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
 <?php 
$where=$_GET['id'];
require_once 'koneksi.php';
//include_once 'ambil.php';
$sql = "SELECT * FROM barang where id_barang=$where";
$query = mysqli_query($koneksi,$sql);
$titles="";
$ids="";
$gambar="";
$harga="";
$keterangan="";
while($data = mysqli_fetch_assoc($query)) :
  $titles.=$data['nama_barang'];
  $ids.=$data['id_barang'];
   $gambar.=$data['gambar'];
  $harga.=$data['harga'];
  $keterangan.=$data['keterangan'];
 
endwhile;


 ?>



		<section>
		<div class="container">
				<?php
						$sql = "SELECT * FROM barang where id_barang=$where";
						$query = mysqli_query ($koneksi, $sql);
						while ($data = mysqli_fetch_assoc($query)){


						?>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img width="20" height="300" src= "../admin/pages/gambar/<?php
                                			echo $data ['gambar'];?>"

                                		?>
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								 

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<tr>
                 			    <td><h4><?php echo $titles ?></h4></td>
              					</tr>
              					<tr>
                 			    <td><?php echo $keterangan ?></td>
              					</tr>
              					<tr>
                 			    <td><h4>Rp <?php echo $harga ?></h4></td>
              					</tr>
								
										
									
								
                    					<a href="index.php" ><button  rel="tooltip" title="Lihat File" data-placement="top" class="btn btn-primary">Kembali </button></form>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<?php
					}
					?>
					
					
					
					
				</div>
			</div>
		</div>
	</section>
	

		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">©2019 animal petshop. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>