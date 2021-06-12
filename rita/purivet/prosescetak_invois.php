<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$koneksi = new mysqli('localhost', 'root', 'admin', 'animal_petshop');
						//create array of initail qty which is 1
 						$index = 1;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
 						//print_r($_SESSION['cart']);
 						$sql = "SELECT o.id_order, o.id_pemesanan, o.id_barang, o.id, o.jumlah, b.nama_barang, b.harga, b.gambar, c.tgl_pemesanan, c.status, c.nama, c.email, c.alamat, c.telepon, c.kodepos, c.catatan FROM t_order o, barang b, pemesanan c WHERE c.id_pemesanan = o.id_pemesanan AND b.id_barang = o.id_barang AND id ='$id'"; 
						$query = mysqli_query($koneksi, $sql);
						while($data = mysqli_fetch_array($query)){
                            $total=$data['harga']*$data['jumlah'];
                        }
                    }
								?>
