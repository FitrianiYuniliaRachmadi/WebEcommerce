<?php
session_start();
?>

<?php
include("KON/koneksi.php");
$tanggal=date("Ymd");
$id_pelanggan=@$_SESSION[idlogin];
$nama = @$_SESSION[namapelanggan];
$email = @$_SESSION[emailpelanggan];
$testi = $_POST['testi'];

$query = "INSERT INTO testimoni (id_cst,nm_cst,email_cst,tanggal_testi,komentar)
	  VALUES ('$id_pelanggan','$nama','$email','$tanggal','$testi')";
	  $result = mysql_query($query);
		if ($result) 
		{ echo"<script>alert('Thanks for adding a testimonial');window.location.href=('index.php')</script>"; }
		else
		{ echo"Pesan Anda tidak dapat diproses."; } 

?>
