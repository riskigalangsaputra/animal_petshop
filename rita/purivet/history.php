<?php
	session_start();
	
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
						<h2 class="title text-center">History Cart</h2>
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
					<th>No. Pemesanan</th>		
					<th>Nama</th>
					<th>Telepon</th>
					<th>Alamat</th>
					<th>tangal pemesanan</th>
					<th>Tanggal pengiriman</th>
					<th>Detail pemesanan</th>
					<th>No Resi </th>
					<th>Status</th>
					<!--<th>Cetak</th>-->

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
 						$id=$_SESSION['id'];
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
 						
						$sql = "SELECT o.id_order, o.id_pemesanan, o.id_barang, o.id, o.jumlah, b.nama_barang, b.harga, b.gambar, c.tgl_pemesanan, c.status, c.nama, c.email, c.alamat, c.telepon, c.kodepos, c.catatan, c.tgl_pengiriman, c.no_resi FROM t_order o, barang b, pemesanan c WHERE c.id_pemesanan = o.id_pemesanan AND b.id_barang = o.id_barang AND id ='$id' GROUP BY o.id_pemesanan ";
						$query = mysqli_query($koneksi, $sql);
						while($data = mysqli_fetch_array($query)){
                            $total=$data['harga']*$data['jumlah'];
								?>
								<tr>
									<td><?php echo $data['id_pemesanan'];?></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['telepon']; ?></td>
									<td><?php echo $data['alamat']; ?></td>
									<td><?php echo $data['tgl_pemesanan']; ?></td>
									<td><?php echo $data['tgl_pengiriman']; ?></td>
									<td><a href="detail_history.php?id_pemesanan=<?php echo $data['id_pemesanan']; ?>" class="btn btn-md btn-success">  <i class="fa fa-pencil-square"></i>View</a></td>
									<td><?php echo $data['no_resi']; ?></td>
									<td><?php echo $data['status']; ?></td>
									<!--<th><td></form><form action="cetak_invois.php" method="post">
									<input type="hidden" name="no_id" value="<?php //echo $data['id_pemesanan']; ?>"><input type="submit" value="Cetak Invoice"></form></td>-->
									
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
						
						
					</tr>
				</tbody>
			</table>
			<a href="index.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
			
			</form>
		</div>
	</div>
</div>
 <?php 

?>