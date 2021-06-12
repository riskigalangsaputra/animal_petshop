<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id_booking  = $_GET['id_booking'];
    $sql = "SELECT * FROM booking_layanan where id_booking=$id_booking";
    $query = mysqli_query($koneksi,$sql);
    while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Edit Data Booking Layanan </h1>
               <form NAME="update" action="update_booking.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>

 <div class="form-group">
   <label for="exampleFormControlTextarea1">ID Booking</label>
   <input class="form-control form-control-sm" type="text" name="id_booking" value="<?php echo $buff['id_booking']; ?>" readonly>  
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama </label>
   <input class="form-control form-control-sm" type="text" name="nama" value="<?php echo $buff['nama']; ?>">
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Email</label>
   <input class="form-control form-control-sm" type="email" name="email" value="<?php echo $buff['email']; ?>">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">No Telepon</label>
   <input class="form-control form-control-sm" type="text" name="telepon" value="<?php echo $buff['telepon']; ?>">
  <label for="exampleFormControlTextarea1">Alamat</label>
   <input class="form-control form-control-sm" type="text" name="alamat" value="<?php echo $buff['alamat']; ?>">
   <label for="exampleFormControlTextarea1">Tanggal Booking</label>
   <input class="form-control form-control-sm" type="date" name="date" value="<?php echo $buff['tgl_booking']; ?>">
   <label for="exampleFormControlTextarea1">Nama Layanan</label>
   <input class="form-control form-control-sm" type="text" name="nama_layanan" value="<?php echo $buff['nama_layanan']; ?>">
   <label for="exampleFormControlTextarea1">Jenis Hewan</label>
   <input class="form-control form-control-sm" type="text" name="jenis_hewan" value="<?php echo $buff['jenis_hewan']; ?>">
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="booking.php"><input type="button" value="Batal"</a></td></tr>
        </tr>
</form>
</div>
 <?php 
endwhile;
?>