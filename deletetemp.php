<?php
require("KON/koneksi.php");
$id = $_GET['id'];
$cek="Select * from sementara where id_produk = '".$id."'";
$hasil = mysql_query($cek);
$result = mysql_num_rows($hasil);
$data=mysql_fetch_array($hasil);
if ($result > 0){
$query="delete from sementara where id_produk = '".$id."'";
$hapus=mysql_query($query);
if($query){
	echo "<script>alert('Successfully Deleted');window.location.href=('keranjang_belanja.php')</script>";
}else{
	echo"Data gagal dihapus";
}
}
?>
