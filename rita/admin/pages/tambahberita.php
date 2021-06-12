<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Data Berita </h1>
               <form NAME="daftar" action="saveberita.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>

  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Judul Berita</label>
   <input class="form-control form-control-sm" type="text" name="judul_berita">
    <div class="form-group">
   <label>Gambar Berita</label>
    <td colspan="2" align="center"><input type="file" name="gambar"></td>
  <td></td>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
  
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="Simpan">
            	 <button><a href="berita.php">Lihat Data</a></button></td></tr>
        </tr>
</form>
</div>