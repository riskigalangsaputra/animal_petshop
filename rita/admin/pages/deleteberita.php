<?php
include('koneksi.php');
    $delete_id = $_GET['delete'];
    $id_berita = "delete from berita where id_berita='$delete_id'";
    $run_delete = mysqli_query($koneksi, $id_berita);
    if($run_delete){
       echo "<script>alert('Data berita telah dihapus!')</script>";
	   echo "<script>window.open('berita.php?view_products','_self')</script>";
    
}
?>