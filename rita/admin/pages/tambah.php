<?php 
   require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Tambah Data Layanan</h1>
               <form action="save.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>
  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama layanan</label>
   <input class="form-control form-control-sm" type="text" name="nama_layanan">
    <div class="form-group">
   <label>Gambar Layanan</label>
    <td colspan="2" align="center"><input type="file" name="gambar"></td>
  <td></td>
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
  
 

  </div>
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="Simpan">
            	 <button><a href="petshop.php">Lihat Data</a></button></td></tr>
        </tr>
</form>
</div>