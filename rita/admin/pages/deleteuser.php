<?php
include('koneksi.php');
    $delete_id = $_GET['delete'];
    $id = "delete from daftar where id='$delete_id'";
    $run_delete = mysqli_query($koneksi, $id);
    if($run_delete){
       echo "<script>alert('Data User telah dihapus!')</script>";
	   echo "<script>window.open('index.php?view_products','_self')</script>";
    
}
?>