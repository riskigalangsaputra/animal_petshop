 <?php 
include_once "koneksi.php";
session_start();

?>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin Miaw</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
 <body onload="window.print()">
              
    <div class="kop">
    <div class="header2"><br>

                <h2 style="text-align: center;">Puri Vet Kembangan</h2>
                <p style="text-align: center;">Jl. Puri Kembangan Raya no 77 H Kedoya Rt011/ 05 JKB 11520</p>
                <p style="text-align: center;">Telp/Fax : 021-5818662</p>
                <hr> </hr>
                
            </div>
                
            </div>
            <tbody>
                <?php 
              	$id = $_GET['id_pemesanan'];
                //connection
						$koneksi = new mysqli('localhost', 'root', '', 'purivet');
					
 						//print_r($_SESSION['cart']);
 						$sql_pemesan = "SELECT * FROM pemesanan WHERE id_pemesanan ='$id'"; 
						$query_pemesan = mysqli_query($koneksi, $sql_pemesan);
                while($data = mysqli_fetch_array($query_pemesan)):
              ?>
 
<pre class="a"><label >Nama Lengkap  		 : <?php echo $data ['nama']; ?> </label></br>
<label>email            			 : <?php echo $data ['email']; ?> </label></br>
<label>Telepon          			 : <?php echo $data ['telepon']; ?> </label></br>
<label>Alamat           			 : <?php echo $data ['alamat']; ?> </label></br>
<label>Tanggal Pemesanan 	: <?php echo $data ['tgl_pemesanan']; ?> </label></br> 
<label>Tanggal Pengiriman 	: <?php echo $data ['tgl_pengiriman'];?> </label></br> 
<label>Nomor Invois 			: inv <?php echo $data ['id_pemesanan']; endwhile;?> </label></br> </br></pre>

           

            <div class="batas"></div>
     			
               
              
               <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Jumlah</th>
       <th scope="col">Total</th>
    </tr>
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
				
								<tr scope="row">
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


         
            <table align="right">
            <tr>
            <td><p  align="right"><?php echo "Jakarta, ".date('d-m-Y')."             "; ?></p></td><td>      </td></tr>
            <tr><td><p align="left"> Ttd</p></td>
            </tr>
            <tr height=80><td></td></tr>

          <tr><td>( </td><td>)</td></tr>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
				
				
			
<style>

.a {
  font-family: Arial, Helvetica, sans-serif;
}
</style>