 <?php 
$title = "";
include_once "koneksi.php";
session_start();

?>
 <body onload="window.print()">
 <div class="col-md-11">
                <h1 class="judul-head">MIAW</h1>
                
              </div>
 <div class="col-md-1">
 <img src="gambar/miaw.jpg" alt="" WIDTH="100" HEIGTH="200" class="img-responsive margin-b10" />
               
              </div>
              
    <div class="kop">
    <div class="header2"><br>
                <h2 style="text-align: center;">Laporan Data Pengiriman</h2>
                <?php echo "Di Cetak Pada Tanggal : ".date('d-m-Y'); ?>
            </div>
                
            </div>
    
    
            <div class="batas"></div>
     
               <table border="1">
              
                <tr class="head">
                						<th> No. </th>
                						<th>Nama </th>
                                        <th> Email </th>
                                        <th>No.Telpon </th>
                                        <th>Alamat</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Nama Barang</th>
                                        <th> Harga</th>
                                        <th> Jumlah</th>
                                        <th> Total Harga</th>
                                        <th> Tanggal Pengiriman</th>
                                        <th>Status</th>
                                        <th>Kurir</th>
                  
                  
                </tr>
                <tbody>
                <?php 
                include_once "cetak_pengiriman.php";
                $no=1;
                while($data = mysqli_fetch_assoc($query)):
              ?>
 <tr>
 <td><?php echo $no ?></td>
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
                                        <?php
                                            echo $data ['nama_barang'];

                                        ?>
                                        </td> 
                                        <td>
                                        <?php
                                            echo $data ['harga'];

                                        ?>
                                        </td> 
                                        <td>
                                        <?php
                                            echo $data ['jumlah'];

                                        ?>
                                        </td> 
                                        <td>
                                        <?php
                                            echo $data ['total_harga'];

                                        ?>
                                        </td> 
                                        
                                        

                                        
                                        
                                        <td>
                                        <?php
                                            echo $data ['tgl_pengiriman'];

                                        ?>
                                        </td> 
                                        
                                        
                                        
                                        
                                        <td>
                                        <?php
                                            echo $data ['status'];

                                        ?>
                                        </td> 
                                        
                                        
                                        <td>
                                        <?php
                                            echo $data ['kurir'];

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