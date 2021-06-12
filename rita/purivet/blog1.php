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
				<div class="col-sm-15 padding-center">
					<div class="makanan">
						<h2 class="title text-center">TIPS & TRICK </h2>
						<section>
						<div id="contact-page" class="container">
    						<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-11"> 
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<center><img width="30" height="400" src="images/home/kucing.png" alt="" /></center>
											</a>
											<h3>Gimana Sih Cara Mengatasi Kitten Mogok Makan?</h3>
							
											
										</div>
										
								</div>
								
							</div>
						</div>

						</div>
							</div>
						</div>
<p aligh="justify"> 
							Sedang bingung kitten mogok makan? Ya, kurang nafsu makan atau mogok makan pada kitten sering dikeluhkan oleh pet parents kepada dokter hewan. Kondisi ini bukan merupakan suatu penyakit, namun kondisi dari adanya penyakit atau perubahan pola makan. Kitten yang kurang nafsu makan biasanya disertai gejala lainnya seperti demam, lesu, dehidrasi, muntah, dan gejala lainnya.<br>

Jika ia menolak makan selama lebih dari satu hari, bawalah ke dokter hewan. Sementara itu, pet parents bisa mencoba membujuknya untuk makan di rumah. Berikut beberapa cara untuk mengatasi kitten mogok makan.<br>

1. TAWARKAN MAKANAN DALAM JUMLAH KECIL DENGAN JARAK WAKTU YANG SERING.<br>
Memberikan makan dengan porsi yang lebih sedikit dan sering dapat membantu kitten untuk merangsang nafsu makan. Berikan selalu makanan yang fresh kepada si kecil.<br><br> 

2. BERIKAN MAKANAN BASAH/ GANTI POLA MAKAN<br>
Kitten yang tidak mau makan bisa saja karena ia bosan dengan makanannya. Dengan mengganti pola makan dapat membantu kitten untuk lebih tertarik dengan makanan, Bisa juga dengan memberikan makanan basah, karena aroma yang lebih menyengat dari makanan kering dapat membantu si kecil untuk lebih nafsu makan. <br><br> 

Tapi, pet parents harus mengubah makanannya dengan bertahap. Di minggu pertama 75% makanan lama 25% makanan baru, minggu kedua 50% makanan lama 50% makanan baru.  Kemudian minggu ketiga 25% makanan lama 75% makanan baru, dan minggu selanjutnya baru bisa 100%.Sebab kucing memiliki pencernaan yang sensitif, ia hanya bisa mengkonsumsi satu jenis makanan yang, jika tidak ia bisa saja diare. <br><br> 
3. MEMBERIKAN SUPLEMEN MENINGKATKAN NAFSU MAKAN <br> 
Biasanya suplemen mengandung banyak vitamin dan mineral yang sangat baik untuk menjaga kesehatan. Secara alami, dapat menggunakan temulawak atau kunyit, tidak hanya bisa meningkatkan nafsu makan pada manusia, namun bisa juga digunakan untuk meningkatkan nafsu makan pada kitten.<br><br> 

4. TANYAKAN MAKANAN PENYEMBUHAN UNTUK ANAK KUCING PADA DOKTER HEWAN. <br> 
Makanan penyembuhan dibuat khusus untuk memenuhi kebutuhan hewan yang sakit, yang tidak makan dengan baik. Makanan ini sangat padat nutrisi, sehingga anak kucing dengan berat 1 kg bisa menerima kebutuhan kalori harian dari sekitar sepertiga isi kaleng saja. <br> 

Kandungan dari makanan penyembuh ini dapat berbagai macam seperti tambahan protein untuk memperbaiki jaringan tubuh dan memperkuat sistem imun, lemak dan karbohidrat, serta tambahan vitamin-vitamin lainnya.<br> 

Ikuti tahap-tahap di atas untuk mengatasi kitten mogok makan, apabila masih terlalu susah dalam mengatasinya, pet parents bisa ke dokter hewan untuk mengetahui apa yang terjadi dalam kondisi kesehatannya. Sebab, faktor kitten mogok makan ada banyak hal, jadi kita harus memastikan dahulu apa penyebabnya yang jelas untuk segera diobati dan dipulihkan nafsu makannya.<br> <br> </div>
							<a  class="btn btn-primary" href="index.php">kembali</a>
						
						</div>
					</div>
				</div>
			</div>
		</div>



					
				</div>
			</div>
		</div>
	</section>
	
	
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">©2021 animal petshop. All rights reserved.</p>
					<p class="pull-right"> <span><a target="_blank" href=index.html></a></span></p>
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