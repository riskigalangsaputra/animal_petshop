


<?php 
include("koneksi.php");
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
include("koneksi.php");
	if (isset($_SESSION['nama'])) {
		include ('library/navbarlogin.php');
	}
	else {
		include('library/navbar.php');
	}
	$id=$_SESSION['id'];
	$sql = "select * from daftar where id='$id'";
$query=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_assoc($query);
 ?>	


<section>

		<div class="container">
				
	 				<div id="contact-page" class="container">
    				<div class="bg">
	    			

    		<div class="row">  
    		
	    			<div class="col-sm-12">
	    			<div class="contact-form">
	    			  <form NAME="update" action="proses_edituser.php" method="POST" >
	    				<h2 class="title text-center">Edit Profil</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
	    				<div class="form-group col-md-8">
				                <input type="hidden" name="id" class="form-control" required="required" placeholder="id" value=<?php echo $data['id'];?> required>
				            </div>
				            <div class="form-group col-md-8">
				               <textarea name="nama" id="nama" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap" ><?php echo $data['nama'];?></textarea>
				            </div>
				            <div class="form-group col-md-8">
				                <input type="email" name="email" class="form-control" required="required" value=<?php echo $data['email'];?> placeholder="Email" required>
				            </div>
				            <div class="form-group col-md-8">
				               <input type="text" name="telepon" class="form-control" value=<?php echo $data['telepon'];?> required="required" placeholder="No.Telepon" required>
				            </div>
				            <div class="form-group col-md-8">
				                <textarea name="alamat" id="alamat" required="required" class="form-control" rows="8" placeholder="Alamat Lengkap" required><?php echo $data['alamat'];?></textarea>
				            </div> 
				            <div class="form-group col-md-8">
				                <input type="password" name="password" class="form-control" value=<?php echo $data['password'];?> required="required" placeholder="password" required>
				            </div> 
				            
				           

				            <div class="form-group col-md-8"> 
				            <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="profill.php"><input type="button" value="Batal"></a></td></tr>
        </tr>
        </div>
        </form>
				          </center>
   
</div>
				            

				                            
				      
	    		</div>
	    		</div>
	    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
  


</div></form></section></body>
							
						</form> <br><br>
					</div><!--/sign up form-->
				</div>
				
				</div>
</div>
</div>
</form>
	</section><!--/form-->
	
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">©2019 Puri Vet. All rights reserved.</p>
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
    
</body>
</html>
 