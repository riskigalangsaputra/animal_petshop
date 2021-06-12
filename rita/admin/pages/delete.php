<?php
include('koneksi.php');
    $delete_id = $_GET['delete'];
    $id_petshop = "delete from petshop where id_layanan='$delete_id'";
    $run_delete = mysqli_query($koneksi, $id_petshop);
    if($run_delete){
       echo "<script>alert('Layanan telah dihapus!')</script>";
	   echo "<script>window.open('petshop.php?view_products','_self')</script>";
    
}
?>






