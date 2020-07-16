<?php
session_start();
?>

<?php
include("KON/koneksi.php");
include "fungsi_thumb1.php";
$fupload=@$_POST['fupload'];
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];

$trans=$_POST['trans'];
$id = @$_SESSION[idlogin];
$bank = $_POST['bank'];

$cek="Select * from transaksi where no_trans = '".$trans."' AND id_cst= '".$id."' ";
$hasil = mysql_query($cek);
$result = mysql_num_rows($hasil);
if($result>=1)
{
  if (!empty($lokasi_file))
  {
  UploadImage($nama_file);
  $query = "INSERT INTO konfirmasi_pembayaran (no_trans,bank,bukti_pembayaran)
	  VALUES ('$trans','$bank','$nama_file')";
  
		mysql_query($query); 
		if ($query) 
		{ echo"<script>alert('Thanks for upload your proof payment');window.location.href=('index.php')</script>"; }
  }
}
else
{ echo"<script>alert('Sorry, your Transaction code was wrong');window.location.href=('konfirmasi.php')</script>"; }
?>
