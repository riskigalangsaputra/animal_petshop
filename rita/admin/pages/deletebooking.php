<?php
include('koneksi.php');
    $delete_id = $_GET['delete'];
    $id_booking = "delete from booking_layanan where id_booking='$delete_id'";
    $run_delete = mysqli_query($koneksi, $id_booking);
    if($run_delete){
       echo "<script>alert('Data booking telah dihapus!')</script>";
	   echo "<script>window.open('booking.php?view_products','_self')</script>";
    
}
?>