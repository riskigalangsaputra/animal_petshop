<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id  = $_GET['id'];
    $sql = "SELECT * FROM daftar where id=$id";
    $query = mysqli_query($koneksi,$sql);
     while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Data Pelanggan </h1>
               <form NAME="update" action="update_user.php" method="POST" >
                <tr>
 
 </tr>

 <div class="form-group">
   <label for="exampleFormControlTextarea1">ID User</label>
   <input class="form-control form-control-sm" type="text" name="id" value="<?php echo $buff['id']; ?>" readonly>  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Nama Lengkap</label>
   <input class="form-control form-control-sm" type="text" name="nama" value="<?php echo $buff['nama']; ?>">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Password</label>
   <input class="form-control form-control-sm" type="text" name="password" value="<?php echo $buff['password']; ?>">
   <div class="form-group">  
   <label for="exampleFormControlTextarea1">Email</label>
   <input class="form-control form-control-sm" type="email" name="email" value="<?php echo $buff['email']; ?>">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">No Telepon</label>
   <input class="form-control form-control-sm" type="text" name="telepon" value="<?php echo $buff['telepon']; ?>">
    <div class="form-group">
   <label for="exampleFormControlTextarea1">Alamat</label>
   <input class="form-control form-control-sm" type="text" name="alamat" value="<?php echo $buff['alamat']; ?>">
  <div class="form-group">
  
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="index.php"><input type="button" value="Batal"</a></td></tr>
        </tr>
</form>
</div>
 <?php 
endwhile;
?>
