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
 <?php 
$where=$_GET['id'];
require_once 'koneksi.php';
//include_once 'ambil.php';
$sql = "SELECT * FROM petshop where id_layanan=$where";
$query = mysqli_query($koneksi,$sql);
$titles="";
$ids="";
$gambar="";
$keterangan="";
while($data = mysqli_fetch_assoc($query)) :
  $titles.=$data['nama_layanan'];
  $ids.=$data['id_layanan'];
   $gambar.=$data['gambar'];
  $keterangan.=$data['keterangan'];
 
endwhile;


 ?>

<section>
  <form action="konfirmasi_booking.php" method="POST">

		<div class="container">
				<?php
						$sql = "SELECT * FROM petshop where id_layanan=$where";
						$query = mysqli_query ($koneksi, $sql);
						while ($data = mysqli_fetch_assoc($query)){

						?>
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
				                <input type="text" name="name" class="form-control" required="required" placeholder="Nama" value=<?php echo $_SESSION['nama'];?> required>
				            </div>
				            <div class="form-group col-md-8">
				                <input type="email" name="email" class="form-control" required="required" value=<?php echo $_SESSION['email'];?> placeholder="Email" required>
				            </div>
				            <div class="form-group col-md-8">
				                <input type="text" name="telepon" class="form-control" value=<?php echo $_SESSION['tlp'];?> required="required" placeholder="No.Telepon" required>
				            </div>
				            <div class="form-group col-md-8">
				                <textarea name="alamat" id="alamat" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap" required><?php echo $_SESSION['alamat'];?></textarea>
				            </div>  
				            <div class="form-group col-md-8">
				                <input type="date" name="tgl_booking" id="tgl_booking" required="required" class="form-control" rows="8" placeholder="Tanggal booking" required>
				            </div> 


				             <div class="form-group col-md-8">
				             	<tr><td>Jenis Hewan</td><td>
                        <select name="jenis_hewan" >
                            <option value="Kucing">Kucing</option>
                            <option value="Anjing">Anjing</option>
                            
                        </select>
                    </td></tr></div>


				       
				            
				            <div class="form-group col-md-8">
				                <input name="catatan" id="catatan" required="required" class="form-control" rows="8" placeholder="Catatan" required>
				            </div>
				             <div class="form-group col-md-8">
				                <input type="text" class="form-control" name="nama_layanan" value="<?php echo $titles ?>" readonly>

				            </div>                        
				      
	    		</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">INFORMASI </h2>
	    				<address> <center>
	    					
							
							<p>Selamat datang di halaman Form Booking Layanan. Silahkan isi form  ini dengan lengkap untuk memudahkan kami menghubungi Anda. Staf kami akan segera menghubungi Anda, setelah kami menerima form booking Anda. </p>
							<p>Untuk booking layanan khusus dirumah hanya melayani didaerah jakarta barat dan melayani sampai pukul 17.00 WIB,  Terima kasih.</p>
							
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
  


<br><center>
   <button type="submit" class="btn btn-primary pull-center" name="submit"> konfirmasi Booking  </a></button>
   <input type="hidden" id="id_layanan" name="id_layanan" value="<?php echo $ids ?>">
</th></tr></tbody></table></center>
							
						</form> <br><br>
					</div><!--/sign up form-->
				</div>
				<?php
					}
					?>
				</div>
</div>
</div>
</form>
	</section><!--/form-->
	
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