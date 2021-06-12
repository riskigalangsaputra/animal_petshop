
<?php 
include "koneksi.php";
  session_start();
  if (isset($_GET['keluar'])) {
    session_unset();
  }
   $where=$_POST['id_layanan'];
$sql = "SELECT * FROM petshop where id_layanan=$where";
$query = mysqli_query($koneksi,$sql);
$titles="";
$ids="";
$gambar="";
$keterangan="";
while($data = mysqli_fetch_assoc($query)) :
  $titles.=$data['nama_layanan'];
  $ids.=$data['id_layanan'];
   $gambar.=$data['gambar'];
  $keterangan.=$data['keterangan'];
 
endwhile;

    $nama    = $_POST ['name'];
    $email   = $_POST ['email'];
    $telepon = $_POST ['telepon'];
    $alamat  = $_POST ['alamat'];
	$tgl_booking = date ('y-m-d');
	$jenis_hewan = $_POST ['jenis_hewan'];
	$catatan     = $_POST ['catatan'];
    $nama_layanan = $_POST ['nama_layanan'];
    $id_layanan   = $_POST ['id_layanan'];
    if (empty($nama)
      ||empty($email)
      ||empty($telepon)
      ||empty($alamat)
      ||empty($jenis_hewan)
      ||empty($catatan)
      ||empty($nama_layanan)
      ||empty($id_layanan)){
        header("Location: index.php");
    }
$sql ="INSERT INTO booking_layanan (nama_layanan,nama,email,telepon,alamat,tgl_booking,jenis_hewan,id_layanan,catatan) values ('$nama_layanan','$nama','$email','$telepon','$alamat','$tgl_booking','$jenis_hewan','$id_layanan', '$catatan')";


$booking_layanan = mysqli_query($koneksi,$sql); 
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ANIMAL PETSHOP & GROOMING SEKTOR 5</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <?php 
  if (isset($_SESSION['nama'])) {
    include ('library/navbarlogin.php');
  }
  else {
    include('library/navbar.php');
  }
 ?> 
  
  <section id="advertisement">
    <div class="container">
     
     <div class="row">
      <!-- /.col-lg-4 -->
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                       
                        </div>
                        <div class="panel-body">
                        <center> <p>Hi</p>
                            <p> Terimakasi sudah booking layanan di ANIMAL PETSHOP Kembanagan</p>
                            </center>
                        </div>
                        <div class="panel panel-info">
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
               
                <center>   <button type="button" class="btn btn-outline btn-primary btn-lg"><a href= "index.php">oke</button></center>
  
</form></th></tr></tbody></table>