<?php 
session_start();
    require_once ('koneksi.php');
    $id_pemesanan  = $_GET['id_pemesanan'];
    $sql = "SELECT * FROM pemesanan where id_pemesanan=$id_pemesanan";
    $query = mysqli_query($koneksi,$sql);
    while($buff = mysqli_fetch_assoc($query)) :
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
        <section>
		<div class="container">
				<div class="col-sm-17 padding-center">
					<div class="makanan"><!--makanan-->
						<h2 class="title text-center">Detail Pemesanan</h2>
						<section>
		<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-3"> 
 </div>
 </div>
 </div> 
 </section>


			<form method="POST" action="save_cart.php">
			<table class="table table-bordered table-striped">
				<thead>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Harga Satuan</th>
					<th>Jumlah</th>
					<th>Harga</th>
				</thead>
				<tbody>
					<?php
						//initialize total
						$subtotal = 0;
						// if(!empty($_SESSION['cart'])){
						//connection
						$koneksi = new mysqli('localhost', 'root', 'admin', 'animal_petshop');
						//create array of initail qty which is 1
 						$index = 1;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT o.id_pemesanan AS id_pemesanan, o.id_barang AS id_barang, o.jumlah AS jumlah,b.nama_barang AS nama_barang,b.harga AS harga FROM t_order o, barang b WHERE o.id_barang=b.id_barang AND o.id_pemesanan = '$id_pemesanan'";
						$query = mysqli_query($koneksi, $sql);
						while($data = mysqli_fetch_array($query)){
                            $total=$data['harga']*$data['jumlah'];
								?>
								<tr>
									<td>
										<?php echo $index;?>
									</td>
									<td><?php echo $data['nama_barang']; ?></td>
									<td><?php echo number_format($data['harga'], 2); ?></td>
									<td><?php echo $data['jumlah']; ?></td>
									<td><?php echo $total; ?></td>
                                    <?php $subtotal += $data['harga']*$data['jumlah'];?>
									<!-- <?php $total += $_SESSION['qty_array'][$index]*$data['harga']; ?> -->
								</tr>
								<?php
								$index ++;
							}
						// }
						// else{
							?>
							<!-- <tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr> -->
							<?php
						// }

					?>
					<tr>
						<td colspan="4" align="right"><b>Total Harga</b></td>
						<td><b><?php echo number_format($subtotal, 2); ?></b></td>
					</tr>
				</tbody>
			</table>
			<a href="history.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
			
			</form>
		</div>
	</div>
</div>
 <?php 
endwhile;
?>