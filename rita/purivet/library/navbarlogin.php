<?php if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();

}
include("koneksi.php");
	$id=$_SESSION['id'];
	$sql = "select * from daftar where id='$id'";
$query=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_assoc($query);

?>

<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/animal.jpg" alt="" WIDTH="100" HEIGTH="200" /></a>
						</div>	
							</div>
							
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="mainmenu pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
							 <li><a href="view_cart.php"><i class="fa fa-shopping-cart"> <?php echo count($_SESSION['cart']); ?></i> Cart</a></li>
							 <li class="dropdown"><a href="#"></i> <?php echo $data['nama'];?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    <li><a href="profill.php">Profil</a></li> 
										<li><a href="history.php">History</a></li> 
										<li><a href="logout.php"> Logout</a></li>
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
				</div>
			</div>          
		</div><!--/header-middle-->
	




		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="petshop.php">Layanan</a></li>
								<li class="dropdown"><a href="#">Produk<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                  
										<li><a href="makanan.php">Makanan</a></li> 
										<li><a href="aksesoris.php">Aksesoris</a></li> 
										<li><a href="grooming.php">Grooming</a></li> 
                                    </ul>
                                </li> 
								<li><a href="blog.php">Berita</a></li>
								<li><a href="contact-us.php">Tentang</a></li>
							</ul>
						</div>
					</div>
					
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
