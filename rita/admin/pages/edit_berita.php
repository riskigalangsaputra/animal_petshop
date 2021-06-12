<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once ('koneksi.php');
    $id_berita  = $_GET['id_berita'];
    $sql = "SELECT * FROM berita where id_berita=$id_berita";
    $query = mysqli_query($koneksi,$sql);
    while($buff = mysqli_fetch_assoc($query)) :
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header"> Form Edit Data Berita </h1>
               <form NAME="update" action="update_berita.php" method="POST" enctype="multipart/form-data">
                <tr>
 
 </tr>

 <div class="form-group">
   <label for="exampleFormControlTextarea1">ID Berita</label>
   <input class="form-control form-control-sm" type="text" name="id_berita" value="<?php echo $buff['id_berita']; ?>" readonly>  
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Judul Berita</label>
   <input class="form-control form-control-sm" type="text" name="judul_berita" value="<?php echo $buff['judul_berita']; ?>">
   <div class="form-group">
   <label for="exampleFormControlTextarea1">Keterangan</label>
   <input class="form-control form-control-sm" type="text" name="keterangan" value="<?php echo $buff['keterangan']; ?>">
  
  <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="Submit" name="update" value="Update" ></input>
<a href="berita.php"><input type="button" value="Batal"</a></td></tr>
        </tr>
</form>
</div>
 <?php 
endwhile;
?>