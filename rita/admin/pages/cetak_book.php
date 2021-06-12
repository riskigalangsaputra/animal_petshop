<?php
include "koneksi.php";
$sql = "SELECT * FROM booking_layanan";
$query = mysqli_query($koneksi,$sql);
?>