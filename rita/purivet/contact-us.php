<?php 
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
	 
	 <div id="contact-page" class="container">
    	  <div class="bg">
    	  <div class="row">    		
	    		<div class="col-sm-12">    			   			
					  			    				    				
					<div id="gmap" class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.947761835121!2d106.7281589499225!3d-6.270600395439074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f16ae56480d9%3A0xf29d0e8c917b4c17!2sanimals%20petshop%20%26%20grooming%20Sektor%205!5e0!3m2!1sid!2sid!4v1612885762540!5m2!1sid!2sid"   width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>	

			</div> 


	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Kontak  <strong>Kami</strong></h2>    			    				    		
		 			
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Kritik dan Saran</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="kritiksaran.php" name="pesan" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nama" class="form-control" required="required" placeholder="Nama" >
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required"  placeholder="Email" >
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subjek">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Tuliskan Saran Anda"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-warning pull-right btn-sm" value="Kirim">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Info Kontak </h2>
	    				<address> <center>
	    					<p>	ANIMAL PETSHOP & GROOMING SEKTOR 5 </p>
	    					<p>Buka : Senin-Minggu 08.00-20.00</p>
							<p>15412 Banten, Kota Tangerang Selatan, Blok EA2 no.43</p>
							<p>Telepon:  +622173663300</p>
							
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	

					
		
		
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
	