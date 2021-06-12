<?php 
    require_once('cekadmin.php');
    require_once('navbar.php');
    require_once('koneksi.php');
$id_petshop = $_POST ['id_petshop'];
    $nama = $_POST ['nama_petshop'];
    $alamat = $_POST ['alamat'];
    $tlp = $_POST ['tlp'];
    $fasilitas = $_POST ['fasilitas'];
    $jam_operasional = $_POST ['jam_operasional'];
    $latitude = $_POST ['latitude'];
    $longtitude = $_POST ['longtitude'];
    $nama_file=$_FILES['img']['name'];

   $lokasi_file = $_FILES['img']['tmp_name'];
  $tipe_file   = $_FILES['img']['type'];
  $nama_file   = $_FILES['img']['name'];
  $direktori   = "gambar/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
   $sql ="insert into petshop values ('$id_petshop', '$nama', '$nama_file', '$alamat', '$tlp', '$fasilitas', '$jam_operasional',  '$latitude', '$longtitude')";
    $query = mysqli_query ($koneksi, $sql);
     
    }


    
	

 ?>
