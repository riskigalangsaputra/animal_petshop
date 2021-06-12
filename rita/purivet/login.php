<?php 
	session_start();
	if (isset($_GET['keluar'])) {
		session_unset();
	}

    if (isset($_SESSION['nama'])) {
		header("Location: index.php");
	}		
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

	//unset qunatity
unset($_SESSION['qty_array']);
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

	<section id="form"><!--form-->
		<div class="container">
			

				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->

						<h2>Login </h2>
						<form method="post" name="login" action="proses_login.php">
							<input type="email" name="email" placeholder="email" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								
							</span>
							<button type="submit" class="btn btn-default"><a href="index.php">Login </a></button>
						</form>

					</div><!--/login form-->
				</div>

				<div class="col-sm-1">
					<h2 class="or">Atau</h2>
				</div>

				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Register </h2>
						<form method="post" name="daftar" action="pross_daftar.php">
							<input type="text" name="nama" placeholder="Nama" />
							<input type="email" name="email" placeholder="Email" />
							<input type="text" name="telepon" placeholder="Telepon" />
							<input type="text" name="alamat" placeholder="Alamat" />
							<input type="password" name="password" placeholder="Password" />
							<button type="submit" class="btn btn-default">Daftar</button>
						</form>
					</div><!--/sign up form-->
				</div>

	</section><!--/form-->
	
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">©2021 animal petshop. All rights reserved.</p>
					<p class="pull-right"> <span><a target="_blank" href=index.php></a></span></p>
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