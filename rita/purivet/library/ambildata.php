<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM petshop where id_petshop=$id";
$query = mysqli_query($koneksi,$sql);
?>