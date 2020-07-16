<?php session_start();

include "KON/koneksi.php";
$id = $_GET['id'];
$cari_barang="select * from produk where id_produk=$id";
$hasil_barang=mysql_query($cari_barang);
$data_barang = mysql_fetch_array($hasil_barang);
$ciri=$data_barang['id_produk'];
$nam=$data_barang['nm_produk'];
$har=$data_barang['harga'];
$gbr=$data_barang['gambar'];
		if($hasil_barang){
			$cari_transaksi="select * from sementara where id_produk= '".$id."' ";
			$hasil_transaksi=mysql_query($cari_transaksi);
			$temukan = mysql_num_rows($hasil_transaksi);
			$data_transaksi = mysql_fetch_array($hasil_transaksi);
			if($temukan==0){
				$query = "insert into sementara 	(id_produk,nm_produk,gambar,harga,jumbel,total)
		Values ('$ciri','$nam','$gbr', '$har', '1', '$har')";
				$result = mysql_query($query);	
				echo "<script>window.location.href=('keranjang_belanja.php')</script>";
			}else{
				$jmllama = $data_transaksi['jumbel'];
				$jmltambah = $jmllama + 1;
				$subtotaltambah = $jmltambah * $har;
				$query = "update sementara set jumbel = '".$jmltambah."',total = '".$subtotaltambah."' where id_produk ='".$id."'";
				$result = mysql_query($query);	
				echo "<script>window.location.href=('keranjang_belanja.php')</script>";
			}
		}else{
			echo"Data gagal diInput..!";			
			}

?>
