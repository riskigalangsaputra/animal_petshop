<?php 
	session_start();
	if (isset($_GET['keluar'])) {
		session_unset();
	}

    if (!isset($_SESSION['nama'])) {
		header("Location: login.php");
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
  	<body>
<?php 
	if (isset($_SESSION['nama'])) {
		include ('library/navbarlogin.php');
	}
	else {
		include('library/navbar.php');
	}
 ?>	
 

<section>
  <form action="konfirmasi_pemesanan.php" method="POST">

		<div class="container">
				
	 				<div id="contact-page" class="container">
    				<div class="bg">
	    			<div class="row">    		
	    			<div class="col-sm-12">  
	    			</div>
				</div>			 		
			</div> 

    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Form Pemesanan</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				            <div class="form-group col-md-8">
				               <label for="exampleFormControlTextarea4">Nama Pemesan</label>
				                <input type="text" name="name" class="form-control" required="required" placeholder="Nama" value=<?php echo $_SESSION['nama'];?> required>

				            </div>
				            <div class="form-group col-md-8">
				               <label for="exampleFormControlTextarea1">Email</label>
				                <input type="email" name="email" class="form-control" required="required" value=<?php echo $_SESSION['email'];?> placeholder="Email" required>
				            </div>
				            <div class="form-group col-md-8">
				               <label for="exampleFormControlTextarea1">No. Telepon</label>
				                <input type="text" name="telepon" class="form-control" value=<?php echo $_SESSION['tlp'];?> required="required" placeholder="No.Telepon" required>
				            </div>
				            <div class="form-group col-md-8">
				               <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
				                <textarea name="alamat" id="alamat" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap" required><?php echo $_SESSION['alamat'];?></textarea>
				                <input type="hidden" name="id" class="form-control" value=<?php echo $_SESSION['id'];?> required>
				            </div> 
				            <div class="form-group col-md-8">
				               <label for="exampleFormControlTextarea1">Kode Pos</label>
				                <textarea name="kodepos" id="kodepos" required="required" class="form-control" rows="8" placeholder="Kode Pos" required></textarea>
				                <input type="hidden" name="id" class="form-control" value=<?php echo $_SESSION['id'];?> required>
				            </div>    
				             <div class="form-group col-md-8">
				               <label for="exampleFormControlTextarea1">Tambah Catatan</label>
				                <textarea name="catatan" id="catatan"  class="form-control" rows="8" placeholder="Tambah Catatan" ></textarea>
				                <input type="hidden" name="id" class="form-control" value=<?php echo $_SESSION['id'];?> required>
				            </div>                      
				       </div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Info Pembayaran </h2>
	    				<address> <center>
	    					
							
							<p>Transfer ke rek BNI an. Ida 55577755265</p>
							<p>Kirim Bukti Transfer ke WA</p>
							<p>0818754829</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center"> Media Sosial </h2>
							<ul>
								<li>
									<a href="#" target='blank'><i class="fa fa-facebook"></i></a>
								</li>
								
								<li>
									<a href="#" target='blank'><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

  
<body>
	<br/>
<div class="container">
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			
			<!-- <form method="POST" action="save_cart.php"> -->
			<table class="table table-bordered table-striped">
				<thead>
					<th></th>
					<th>Nama Barang</th>
					<th>Harga Satuan</th>
					<th>Jumlah</th>
					<th>Harga</th>
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
						<td colspan="4" align="right"><b>Total Harga</b></td>
						<td><b><?php echo number_format($total, 2); ?></b></td>
					</tr>
				</tbody>
			</table>

<br><center>
   <button type="submit" class="btn btn-primary pull-center" name="submit">konfirmasi pemesanan </a></button>
   <input type="hidden" id="id_barang" name="id_barang" value="<?php echo $ids ?>">
</th></tr></tbody></table></center>
							
						<!-- </form>  -->
						<br><br>
					</div><!--/sign up form-->
				</div>
				<?php
					
					?>
				</div>
</div>
</div>
</form>
	</section><!--/form-->
	
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
    <script>
		function jumlahHarga(){
			totalHarga =  $('#jumlah').val() * $('#harga').val();
			$('#total_harga').val(totalHarga);
		}

		$('#jumlah').click(function(){
			jumlahHarga()    		
		})

		$('#jumlah').change(function(){
    		jumlahHarga()  
		})
    </script>
</body>
</html>