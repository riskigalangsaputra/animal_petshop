
<?php 
include "koneksi.php";
  session_start();
  if (isset($_GET['keluar'])) {
    session_unset();
  }

  
$where=$_POST['id_barang'];
$sql = "SELECT * FROM barang where id_barang=$where";
$query = mysqli_query($koneksi,$sql);
$nama_barang="";
$ids="";
$gambar="";
$harga="";
$keterangan="";
while($data = mysqli_fetch_assoc($query)) :
  $nama_barang.=$data['nama_barang'];
  $ids.=$data['id_barang'];
   $gambar.=$data['gambar'];
  $harga.=$data['harga'];
  $stok.=$data['stok'];
  $keterangan.=$data['keterangan'];
 
endwhile;

    $nama    = $_POST ['name'];
    $email   = $_POST ['email'];
    $telepon = $_POST ['telepon'];
    $alamat  = $_POST ['alamat'];
	$tanggal = date ('y-m-d');
	$kodepos  = $_POST ['kodepos'];
	$catatan  = $_POST ['catatan'];
    $jumlah     = $_POST ['jumlah'];
    $id_barang  = $_POST ['id_barang'];
    $total_harga = $_POST ['jumlah'] * $harga ;
    if (empty($nama)
      ||empty($email)
      ||empty($telepon)
      ||empty($alamat)
      ||empty($jumlah)
      ||empty($id_barang)){
        header("Location: konfirmasi.php");
    }
$sql ="INSERT INTO pemesanan (nama,email,telepon,alamat,tgl_pemesanan,kodepos,catatan) values ('$nama','$email','$telepon','$alamat','$tanggal','$kodepos','$catatan')";

$pemesanan = mysqli_query($koneksi,$sql); 
$lastid = mysqli_insert_id($koneksi);
for($i=0;$i<count($_SESSION['cart']);$i++){
$id_barang=$_SESSION['cart'][$i];
//$id=$_SESSION['id'][$i];
$id 	 = $_POST ['id'];
$qty=$_SESSION['qty_array'][$i];
$sql="INSERT INTO t_order(id,id_pemesanan,id_barang,jumlah)values('$id','$lastid','$id_barang','$qty')";
$query = mysqli_query($koneksi,$sql);
$where2=$id_barang;
$sql3 = "SELECT * FROM barang where id_barang='$where2'";
$query2 = mysqli_query($koneksi,$sql3);
$data2 = mysqli_fetch_assoc($query2);
$stok1=$data2['stok'];
$sisa=$stok1 - $qty;

$sql2="UPDATE barang SET stok='$sisa' where id_barang='$id_barang' ";
$query = mysqli_query($koneksi,$sql2);

}

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
                        <center><h1> <p class="text-primary"> SELAMAT !</p></h1>
                        </div>
                        <div class="panel-body">
                        <center> <p>Hi</p>
                            <p> Terimakasi telah berbelanja di ANIMAL PETSHOP</p>
                            <p> Silahkan ikuti petunjuk dibawah untuk proses pemesanan barang anda.
                            <p> BAYAR DITEMPAT dapat dilakukan dengan mengikuti petunjuk berikut :</p>
                            <h3> <p class="text-success"> BAYAR DITEMPAT</p></h3>
                            <P> 1. Layanan pelanggan akan mengirimkan rincian pesanan melalu email <p>
                           <p> dan SMS kemudian memproses pengiriman.</p>
                            <p> 2. Anda dapat melakukan pembayaan tunai langsung kepada kurir saat </p>
                            <p>pesanan diterima</p>
                            <p> Dengan layanan BAYAR DITEMPAT, anda dapat melakukan pembayaran tunai</p>
                            <p> kepada kurir kami saat anda menerima pesanan.</p>
                            <p> 3. Untuk informasi lebih lanjut mengenai pembayaran dan pengiriman
                            <p> silahkan hubungi kontak kami </p></center>
                        </div>
                        <div class="panel panel-info">
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
               
                <center>   <button type="button" class="btn btn-outline btn-primary btn-lg"><a href= "index.php">oke</button></center>
  
</form></th></tr></tbody></table>