<?php
include "koneksi.php";
$sql = "SELECT * FROM pemesanan";
$query = mysqli_query($koneksi,$sql);
?>