 <?php 
include_once "koneksi.php";
session_start();

?>
 <body onload="window.print()">
              
    <div class="kop">
    <div class="header2"><br>
                <h2 style="text-align: center;">Puri Vet Kembangan</h2>
                <p style="text-align: center;">Jl. Puri Kembangan Raya no 77 H Kedoya Rt011/ 05 JKB 11520</p>
                <p style="text-align: center;">Telp/Fax : 021-5818662</p>
                <?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?>
            </div>
                
            </div>
            <tbody>
                <?php 
              	$id = $_POST['no_id'];
                //connection
						$koneksi = new mysqli('localhost', 'root', 'admin', 'animal_petshop');
					
 						//print_r($_SESSION['cart']);
 						$sql_pemesan = "SELECT * FROM pemesanan WHERE id_pemesanan ='$id'"; 
						$query_pemesan = mysqli_query($koneksi, $sql_pemesan);
                while($data = mysqli_fetch_array($query_pemesan)):
              ?>
    
<label>Nama Lengkap      : <?php echo $data ['nama']; ?> </label></br>
<label>email             : <?php echo $data ['email']; ?> </label></br>
<label>Telepon           : <?php echo $data ['telepon']; ?> </label></br>
<label>Alamat            : <?php echo $data ['alamat']; ?> </label></br>
<label>Tanggal Pemesanan : <?php echo $data ['tgl_pemesanan']; endwhile;?> </label></br></br>
            <div class="batas"></div>
     			
               <table border="1">
              
                <tr class="head">

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
						$subtotal = 0;
						$no = 1;
 						$index = 1;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT o.id_pemesanan AS id_pemesanan, o.id_barang AS id_barang, o.jumlah AS jumlah,b.nama_barang AS nama_barang,b.harga AS harga FROM t_order o, barang b WHERE o.id_barang=b.id_barang AND o.id_pemesanan = '$id'";
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
				
		
</tr>
              <?php $no++;?>
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
				</table>
				</center>
			
			</form>

