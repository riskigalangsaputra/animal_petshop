<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id_layanan  = $_GET['id_layanan'];
    $sql = "SELECT * FROM petshop where id_layanan=$id_layanan";
    $query = mysqli_query($koneksi,$sql);
    while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Edit Data Layanan </h1>
               <form NAME="update" action="update_petshop.php" method="POST" >
                <tr>
 
 </tr>

 <div class="form-group">
   <label for="exampleFormControlTextarea1">ID Layanan</label>
   <input class="form-control form-control-sm" type="text" name="id_layanan" value="<?php echo $buff['id_layanan']; ?>" readonly>  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama Layanan</label>
   <input class="form-control form-control-sm" type="text" name="nama_layanan" value="<?php echo $buff['nama_layanan']; ?>">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Keterangan</label>
   <input class="form-control form-control-sm" type="text" name="keterangan" value="<?php echo $buff['keterangan']; ?>">
   
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="petshop.php"><input type="button" value="Batal"</a></td></tr>
        </tr>
</form>
</div>
 <?php 
endwhile;
?>