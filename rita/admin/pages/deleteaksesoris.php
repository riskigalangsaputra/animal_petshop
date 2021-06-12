<?php
include('koneksi.php');
    $delete_id = $_GET['delete'];
    $id_barang = "delete from barang where id_barang='$delete_id'";
    $run_delete = mysqli_query($koneksi, $id_barang);
    if($run_delete){
       echo "<script>alert('Data aksesoris telah dihapus!')</script>";
	   echo "<script>window.open('aksesoris.php?view_products','_self')</script>";
    
}
?>