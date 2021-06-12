<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Tambah Data Barang</h1>
               <form action="savebarang.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>
 
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama Barang</label>
   <input class="form-control form-control-sm" type="text" name="nama_barang">
    <div class="form-group">
   <label>Gambar Petshop</label>
    <td colspan="2" align="center"><input type="file" name="gambar"></td>
  <td></td>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Jenis Barang </label>

    	<select name="jenis_barang" class= "form-control form-control-sm"> 
    		<?php 
    				$query = "select * from jenis";
    				$sql =  mysqli_query($koneksi, $query);
    				while ($data = mysqli_fetch_array($sql)) {
    					$jenis_barang = $data['jenis_barang'];
    					echo "<option value='$jenis_barang'> $jenis_barang</option>";
    				}

    		 ?>	
    	</select>  

    </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Kategori Barang </label>

    	<select name="kategori" class= "form-control form-control-sm"> 
    		<?php 
    				$query = "select * from kategori";
    				$sql =  mysqli_query($koneksi, $query);
    				while ($data = mysqli_fetch_array($sql)) {
    					$kategori = $data['kategori'];
    					echo "<option value='$kategori'> $kategori</option>";
    				}

    		 ?>	
    	</select>  

    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Stok </label>
    <input class="form-control form-control-sm" type="text" name="stok"></div>
    <label for="exampleFormControlTextarea1">Harga Satuan </label>
    <input class="form-control form-control-sm" type="text" name="harga"></div>
    <label for="exampleFormControlTextarea1">Keterangan </label>
    <input class="form-control form-control-sm" type="text" name="keterangan"></div>
  
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <button><a href="index.php">Kembali</a></button></td></tr>
            <td><input type="submit" value="Simpan">
            	 
        </tr>
</form>


</div>