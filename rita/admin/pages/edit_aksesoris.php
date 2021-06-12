<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id_barang  = $_GET['id_barang'];
    $sql = "SELECT * FROM barang where id_barang=$id_barang";
    $query = mysqli_query($koneksi,$sql);
     while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Data Produk </h1>
               <form NAME="update" action="update_aksesoris.php" method="POST" >
                <tr>
 
 </tr>

 <div class="form-group">
   <label for="exampleFormControlTextarea1">ID Produk</label>
   <input class="form-control form-control-sm" type="text" name="id_barang" value="<?php echo $buff['id_barang']; ?>" readonly>  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama Produk</label>
   <input class="form-control form-control-sm" type="text" name="nama_barang" value="<?php echo $buff['nama_barang']; ?>">
   <div class="form-group">
   <div class="form-group">
   <label>Gambar Barang</label>
    <td colspan="2" align="center"><input type="file" name="adiputra"></td>
  <td></td>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Jenis Barang </label>

      <select class= "form-control form-control-sm"> 
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

      <select class= "form-control form-control-sm"> 
        <?php 
            $query = "select * from kategori";
            $sql =  mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($sql)) {
              $kategori = $data['kategori'];
              echo "<option value='$kategori'> $kategori</option>" ;
            }

         ?> 
      </select>  
   <label for="exampleFormControlTextarea1">Stok</label>
   <input class="form-control form-control-sm" type="text" name="stok" value="<?php echo $buff['stok']; ?>">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Harga</label>
   <input class="form-control form-control-sm" type="text" name="harga" value="<?php echo $buff['harga']; ?>">
    <div class="form-group">
   <label for="exampleFormControlTextarea1">Keterangan</label>
   <input class="form-control form-control-sm" type="text" name="keterangan" value="<?php echo $buff['keterangan']; ?>">
  
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="aksesoris.php"><input type="button" value="Batal"</a></td></tr>
        </tr>
</form>
</div>
 <?php 
endwhile;
?>
