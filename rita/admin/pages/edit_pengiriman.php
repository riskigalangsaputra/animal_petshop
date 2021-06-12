<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id_pemesanan  = $_GET['id_pemesanan'];
    $sql = "SELECT * FROM pemesanan where id_pemesanan=$id_pemesanan";
    $query = mysqli_query($koneksi,$sql);
    while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form pengiriman </h1>
               <form NAME="update" action="update_pengiriman.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>
<div class="form-group">
   <label for="exampleFormControlTextarea1"> Id Pemesanan</label>
   <input class="form-control form-control-sm" type="text" name="id_pemesanan" value="<?php echo $buff['id_pemesanan']; ?>" readonly>
 <div class="form-group">
   <label for="exampleFormControlTextarea1"> tanggal pengiriman</label>
   <input class="form-control form-control-sm" type="date" name="tgl_pengiriman" value="<?php echo $buff['tgl_pengiriman']; ?>">  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">No Resi </label>
   <input class="form-control form-control-sm" type="text" name="no_resi" value="<?php echo $buff['no_resi']; ?>">
   
   <div class="form-group">
<tr><td>Status</td><td>
                        <select name="status" value="<?php echo $buff['status']; ?>">
                            <option value="Proses">Proses</option>
                            <option value="Dikirim">Dikirim</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </td></tr></div>

   
  
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="pengiriman.php"><input type="button" value="Batal"</a></td></tr>
        </tr>
</form>
</div>
 <?php 
endwhile;
?>