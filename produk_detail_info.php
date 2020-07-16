<style type="text/css">
.teks_nama_produk{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight: bold;
	color: #990000;
}
.teks_deskripsi_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	text-align: center;
}
.teks_stok{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	text-decoration: underline;
}
.teks_harga_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	color: #990000;
	font-weight: bold;
}
.teks_info {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight:bold;
	color:#F00;
	}
</style>

<?php
include("KON/koneksi.php");
$id = $_GET['id'];
	$query = "select * from produk where id_produk = '".$id."'";
	$hasil = mysql_query($query);
	$temukan = mysql_num_rows($hasil);
	$data = mysql_fetch_array($hasil);
	if($temukan==0){
	}else{
?>

<table border=0px cellpadding='10' cellspacing="2" bgcolor="" bordercolor="" align="center">
	<tr>
        
<td align=center>			 
	<div class ="teks_nama_produk">
    	<?php echo $data['nm_produk']; ?><br><br>
    </div>
    
    <div>
	<img width='240px' height='240px' valign='top' border='1,5' src="admin/gambar_produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		
    
    <div class ="teks_deskripsi_produk">
    	<?php echo $data['detail']; ?><p><p>
    </div> 
    
	<!-- <div class ="teks_stok">
    	Remaining stock [<?php //echo  $data['stock']; ?>]<br><br>
    </div> --> 
    
    <div class ="teks_harga_produk">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>

    <div class ="teks_info">
        <?php
		//if($data['stok']==0){
		//echo 'SORRY, THIS PRODUCT IS SOLD OUT ';
		//}else{
		echo '
	<a href="keranjang.php?id='.$data['id_produk'].'"><img src="IMAGE/TBeli.jpg"\ title="BUY NOW" border="0" width=\"50\" height=\"30\"></a>';
		//}
		?>
	</div>
     <hr />
     
<?php
	}
?>
</td>    
</tr>
</table>
    
