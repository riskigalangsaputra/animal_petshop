<?php 
     require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
 ?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Data Produk</h1>
                </div>

                <div class="col-md-6">
                    <a href="tambahbarang.php" class="btn btn-md btn-success"> Tambah Produk</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"  >
                                <thead>
                                    <tr>
                                    	
                                        <th>Nama Barang </th>
                                         <th>Gambar Barang </th>
                                        <th>Jenis Barang </th>
                                        <th>Kategori Barang </th>
                                        <th>Stok </th>
                                        <th>Harga Satuan</th>
                                         <th>Keterangan</th>
                                        <th>Opsi </th>
                                    </tr>
                                </thead>
                                <?php
                                	$sql = "select * from barang WHERE jenis_barang = 'aksesoris'"; 
                                	$query = mysqli_query ($koneksi, $sql);
                                	
                                	while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                		?>

                                		<tr> 
                                		
                                		<td>
                                		<?php
                                			echo $data ['nama_barang'];

                                		?>
                                		</td>


                                		<td><img width="80" height="80" src= "gambar/<?php
                                			echo $data ['gambar'];?>"

                                		?>
                                		</td>

                                		<td>
                                		<?php
                                			echo $data ['jenis_barang'];

                                		?>
                                		</td>

                                		<td>
                                		<?php
                                			echo $data ['kategori'];

                                		?>
                                		</td>

                                		<td>
                                		<?php
                                			echo $data ['stok'];

                                		?>
                                		</td> 
                                		<td>
                                		<?php
                                			echo $data ['harga'];

                                		?>
                                		</td> 
                                		<td>
                                		<?php
                                			echo $data ['keterangan'];

                                		?>
                                		</td>

                                		
                                		<td>
                                		<a href="edit_produk.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-md btn-success"> <i class="fa fa-pencil-square"></i>  Edit</a> <br> <br>
                                		<a href="deleteaksesoris.php?delete=<?php echo $data ['id_barang'];?>" class="btn btn-md btn-danger"> Hapus</a>
                                		</td>
                                		</tr>
                                		<?php


                                	}
                                	?>
                            </table>
                          
                          <a target="_blank" href="cetak_produk.php"><input type="button" value="Cetak"></a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
