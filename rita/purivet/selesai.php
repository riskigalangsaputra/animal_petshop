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


<body>

	<br/>
<div class="container">
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1> <p class="text-success"> SELAMAT !</p></h1>
                    <div class="panel-body">
                        <center> <p>Hi</p>
                            <p> Terimakasi telah berbelanja di Puri Vet</p>
                            <p> Silahkan ikuti petunjuk dibawah untuk proses pemesanan barang anda.
                            
                            </center>
                        </div>
                        <div class="panel panel-info">
               
			<form >
			<center><h3> <p class="text-success"> daftar belanjaan</p></h3>
			<table class="table table-bordered table-striped">
				<thead>
					<th></th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$koneksi = new mysqli('localhost', 'root', 'admin', 'animal_petshop');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT * FROM barang WHERE id_barang IN (".implode(',',$_SESSION['cart']).")";
						$query = mysqli_query($koneksi, $sql);
						while($data = mysqli_fetch_array($query)){
								?>
								<tr>
									<td>
										
									</td>
									<td><?php echo $data['nama_barang']; ?></td>
									<td><?php echo number_format($data['harga'], 2); ?></td>
									<input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
									<td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
									<td><?php echo number_format($_SESSION['qty_array'][$index]*$data['harga'], 2); ?></td>
									<?php $total += $_SESSION['qty_array'][$index]*$data['harga']; ?>
								</tr>
								<?php
								$index ++;
							}
						}
						else{
							?>
							<tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>
					<tr>
						<td colspan="4" align="right"><b>Total</b></td>
						<td><b><?php echo number_format($total, 2); ?></b></td>
					</tr>
				</tbody>
			</table>

			
			
			</form>

		</div>
	</div>
	<h3> <p class="text-success"> BAYAR DITEMPAT</p></h3>
                            <P> 1. Layanan pelanggan akan mengirimkan rincian pesanan melalu email <p>
                           <p> dan SMS kemudian memproses pengiriman.</p>
                            <p> 2. Anda dapat melakukan pembayaan tunai langsung kepada kurir saat </p>
                            <p>pesanan diterima</p>
                            <p> Dengan layanan BAYAR DITEMPAT, anda dapat melakukan pembayaran tunai</p>
                            <p> kepada kurir kami saat anda menerima pesanan.</p>
                            <p> 3. Untuk informasi lebih lanjut mengenai pembayaran dan pengiriman
                            <p> silahkan hubungi kontak kami </p></center>

                            <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> OK</a>
</div>
</body>
</html>