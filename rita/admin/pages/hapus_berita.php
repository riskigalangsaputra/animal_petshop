<?php 
	require_once 'koneksi.php';
	$id_berita = $_GET['id_berita'];
	$sql = "DELETE FROM berita where id_berita=$id_berita";
	$query = mysqli_query($koneksi,$sql);
	header("location:berita.php");
?>