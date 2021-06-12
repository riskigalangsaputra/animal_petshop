<?php 
session_start();
include ('koneksi.php');
	
	if (isset($_GET['keluar'])) {
		session_unset();
	}

	if (!isset($_SESSION['nama'])) {
		header("Location: login.php");
	}


	if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$array_id = array_column($_SESSION["shopping_cart"], "id_barang");
		if(!in_array($_GET["id"], $array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$array = array(
				'id_barang'				=>	$_GET["id_barang"],
				'nama_barang'			=>	$_POST["nama_barang"],
				'harga'					=>	$_POST["harga"],
				'jumlah'				=>	$_POST["jumlah"]
				
			);
			$_SESSION["shopping_cart"][$count] = $array;
		}
		else
		{
			echo '<script>alert("Produk  Berhasil Ditambahkan")</script>';
		}
	}
	else
	{
		$array = array(
				'id_barang'				=>	$_GET["id_barang"],
				'nama_barang'			=>	$_POST["nama_barang"],
				'harga'					=>	$_POST["harga"],
				'jumlah'				=>	$_POST["jumlah"]
		);
		$_SESSION["shopping_cart"][0] = $array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["id_barang"] == $_GET["id_barang"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="makanan.php"</script>';
			}
		}
	}
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
		
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th >Nama Barang</th>
						<th >Quantity</th>
						<th >Price</th>
						<th >Total</th>
						<th >Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["nama_barang"]; ?></td>
						<td><?php echo $values["jumlah"]; ?></td>
						<td><?php echo $values["harga"]; ?></td>
						<td><?php echo number_format($values["jumlah"] * $values["harga"], 2);?></td>
						<td><a href="keranjang.php?action=delete&id_barang=<?php echo $values["id_barang"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["jumlah"] * $values["harga"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>