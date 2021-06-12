<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Data Pemesanan </h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Nama </th>
                                        <th> Email </th>
                                        <th>No.Telpon </th>
                                        <th>Alamat</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Detail Pemesanan</th>


                                        
                                    </tr>
                                </thead>
                               <?php
                              // $sql="select nama,tlp,alamat,c.tgl_pemesanan *from pemesanan c join daftar a using(id) 
                               //";
                                	$sql = 'select * FROM pemesanan'; 
                                	$query = mysqli_query ($koneksi, $sql);
                                	
                                	while ($data = mysqli_fetch_assoc($query)) {
                                		?>

                                		<tr> 
                                		<td> 
                                		<?php
                                			echo $data ['nama'];

                                		?>
                                		</td>
                                        <td> 
                                        <?php
                                            echo $data ['email'];

                                        ?>
                                        </td>
                                		<td>
                                		<?php
                                			echo $data ['telepon'];

                                		?>
                                		</td>

                                		<td>
                                		<?php
                                			echo $data ['alamat'];

                                		?>
                                		</td>

                                		<td>
                                		<?php
                                			echo $data ['tgl_pemesanan'];

                                		?>
                                		</td>
                                		
                                		<td>
                                        <a href="detail_pemesanan.php?id_pemesanan=<?php echo $data['id_pemesanan']; ?>" class="btn btn-md btn-success">  <i class="fa fa-pencil-square"></i>View</a>
                                        </td>
                                		
                                		</tr>
                                	<?php
                                	}

                                	?>
                            </table>
                          <a target="_blank" href="cetak.php"><input type="button" value="Cetak"></a>
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
