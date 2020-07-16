<?php
include("KON/koneksi.php");

$query="delete from sementara";
$hapus=mysql_query($query);
if($query){
	echo "<script>alert('Succesfully Deleted');window.location.href=('keranjang_belanja.php')</script>";
}else{
	echo"Data gagal dihapus";
}


?>
