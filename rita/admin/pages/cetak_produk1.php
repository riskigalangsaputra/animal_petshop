<?php
include "koneksi.php";
$sql = "SELECT * FROM barang";
$query = mysqli_query($koneksi,$sql);
?>