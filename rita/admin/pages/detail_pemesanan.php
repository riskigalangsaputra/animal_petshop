<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id_pemesanan  = $_GET['id_pemesanan'];
    $sql = "SELECT * FROM pemesanan where id_pemesanan=$id_pemesanan";
    $query = mysqli_query($koneksi,$sql);
    while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Detail Pemesanan </h1>
               <form NAME="update" action="update_pengiriman.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>
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
			<form method="POST" action="save_cart.php">
			<table class="table table-bordered table-striped">
				<thead>
					<th>No</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<?php
						//initialize total
						$subtotal = 0;
						// if(!empty($_SESSION['cart'])){
						//connection
						$koneksi = new mysqli('localhost', 'root', '', 'purivet');
						//create array of initail qty which is 1
 						$index = 1;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT o.id_pemesanan AS id_pemesanan, o.id_barang AS id_barang, o.jumlah AS jumlah,b.nama_barang AS nama_barang,b.harga AS harga FROM t_order o, barang b WHERE o.id_barang=b.id_barang AND o.id_pemesanan = '$id_pemesanan'";
						$query = mysqli_query($koneksi, $sql);
						while($data = mysqli_fetch_array($query)){
                            $total=$data['harga']*$data['jumlah'];
								?>
								<tr>
									<td>
										<?php echo $index;?>
									</td>
									<td><?php echo $data['nama_barang']; ?></td>
									<td><?php echo number_format($data['harga'], 2); ?></td>
									<td><?php echo $data['jumlah']; ?></td>
									<td><?php echo $total; ?></td>
                                    <?php $subtotal += $data['harga']*$data['jumlah'];?>
									<!-- <?php $total += $_SESSION['qty_array'][$index]*$data['harga']; ?> -->
								</tr>
								<?php
								$index ++;
							}
						// }
						// else{
							?>
							<!-- <tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr> -->
							<?php
						// }

					?>
					<tr>
						<td colspan="4" align="right"><b>Total</b></td>
						<td><b><?php echo number_format($subtotal, 2); ?></b></td>
					</tr>
				</tbody>
			</table>
			<a href="pemesanan.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
			
			</form>
		</div>
	</div>
</div>
 <?php 
endwhile;
?>