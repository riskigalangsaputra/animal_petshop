<?php 
   require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Tambah Data Pelanggan</h1>
               <form action="saveuser.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>
  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama Pelanggan</label>
   <input class="form-control form-control-sm" type="text" name="nama">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Email</label>
   <input class="form-control form-control-sm" type="text" name="email">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Nomor Telepon </label>
   <input class="form-control form-control-sm" type="text" name="telepon">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Password</label>
   <input class="form-control form-control-sm" type="text" name="password">
  <td></td>
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
  
 

  </div>
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="Simpan">
            	 <button><a href="index.php">Lihat Data</a></button></td></tr>
        </tr>
</form>
</div>