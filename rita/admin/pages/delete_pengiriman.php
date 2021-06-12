<?php
include('koneksi.php');
    $delete_id = $_GET['delete'];
    $id_pemesanan = "delete from pemesanan where id_pemesanan='$delete_id'";
    $run_delete = mysqli_query($koneksi, $id_pemesanan);
    if($run_delete){
       echo "<script>alert('Data pengiriman telah dihapus!')</script>";
	   echo "<script>window.open('pengiriman.php?view_products','_self')</script>";
    
}
?>