 <?php 
$title = "";
include_once "koneksi.php";
session_start();

?>
 <body onload="window.print()">
              
    <div class="kop">
    <div class="header2"><br>

                <h2 style="text-align: center;">Puri Vet Kembangan</h2>
                <p style="text-align: center;">Jl. Puri Kembangan Raya no 77 H Kedoya Rt011/ 05 JKB 11520</p>
                <p style="text-align: center;">Telp/Fax : 021-5818662</p>
                <hr> </hr>
                <p style="text-align: left;">Data Pemesanan Produk</p>
                <?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?>

            </div>
                
            </div>
    
    
            <div class="batas"></div>
     
               <table border="1">
              
                <tr class="head">
                						<th>No. </th>
                  						<th>Nama </th>
                                        <th> Email </th>
                                        <th>No.Telpon </th>
                                        <th>Alamat</th>
                                        <th>Tanggal Pemesanan</th>
                                       

                  
                  
                </tr>
                <tbody>
                <?php 
                include_once "cetak_pemesanan.php";
                $no=1;
                while($data = mysqli_fetch_assoc($query)):
              ?>
 <tr>
 <td><?php echo $no ?></td>
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

                                		
 
</tr>
              <?php $no++; endwhile; ?>
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>