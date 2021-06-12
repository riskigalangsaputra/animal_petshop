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
			
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1> <p class="text-success"> SELAMAT !</p></h1>
                    <div class="panel-body">
                        <center> <p>Hi</p>
                            <p> Terimakasi telah berbelanja di ANIMAL PETSHOP</p>
                            <p> Silahkan ikuti petunjuk dibawah untuk proses pemesanan barang anda.
                            
                            </center>
                        </div>
                       


                        <div class="panel panel-info">
               
			<form >
			<center>
			<table class="table table-bordered table-striped">
				<thead>
					<th>Produk</th>
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
 						//print_r($_SESSION['cart']);
						$sql = "SELECT * FROM barang WHERE id_barang IN (".implode(',',$_SESSION['cart']).")";
						$query = mysqli_query($koneksi, $sql);
						while($data = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><img width="80" height="80" src= "../admin/pages/gambar/<?php
                                			echo $data ['gambar'];?>" 
                                			?>
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
						unset($_SESSION["cart"]);
						unset($_SESSION["qty_array"]);
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
	<h3> <p class="text-success"> CARA PEMBAYARAN</p></h3>
<p>1. Pastikan Anda Sudah Mengisi Alamat yang Tepat</p>
<p>2. Transfer pembayaran ke rek BNI an. Ida 55577755265 Sesuai Total Pembayaran</p>
<p>3. Kemudian Kirim Bukti Pembayaran Ke 0818754829 dengan format</p>
<p>-Nama</p>
<p>-Pesanan</p>
<p>-No Telepon</p>
<p>-Alamat</p>
<h3> <p class="text-success"> CATATAN</p></h3>
<p>Totalan tersebut BELUM TERMASUK ONGKIR. Ongkir dibayar ditempat COD via. JNT. Pengiriman dari Kembangan, Jakarta Barat bisa dicek ongkir di :</p>
<a href="https://www.jet.co.id/tariff" target='blank'>https://www.jet.co.id/tariff</a> </p>

</center>

                          <center>  <a href="index.php" class="btn btn-primary"> OK</a></center>
</div>
</body>
</html>