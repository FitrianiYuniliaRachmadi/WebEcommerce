<?php
@session_start();
include "kon/koneksi.php";
?>


     <style type="text/css">
.teks_nama_produk {
	font-family: JasmineUPC;
	font-size: 18px;
	color: #000033;
}
.teks_harga_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
	font-weight: bold;
}
 </style>

<?php


	$query = "select * from produk order by id_produk desc";
	$hasil = mysql_query($query);
	$numrows = mysql_num_rows($hasil);

	
	
	//Paging Data sebanyak .. data product perlembar
	$jumlah = mysql_num_rows($hasil);
	$limit = 9;
	if (empty($offset)) {
		$offset = 0;
	}
		if(isset($_GET['offset'])){$offset = $_GET['offset']; }
		$seleksi = "SELECT * FROM produk ORDER BY id_produk DESC LIMIT $offset, $limit";
		$result = mysql_query($seleksi);

		//echo "<div align=\"right\">";
		$halaman = intval($jumlah/$limit);
		if ($jumlah%$limit) { 
			$halaman++; 
		} 
			for ($i=1;$i<=$halaman;$i++) {
				$newoffset=$limit*($i-1); 
					if ($offset!=$newoffset)
						{ 
						echo "<b><font face=\"arial\" size=\"2\"> <a href=\"produk.php?produk_catalog2&offset=$newoffset\">$i</a></font></B>";
					} else { 
						echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
					} 
			}
						echo "</div>";
						echo "<br><br><br>";
	    //Batas kode paging data
	
?>


<form id="form1" name="form1" method="get" enctype='multipart/form-data' action="produk_detail.php" >

<table cellpadding='10' cellspacing="2" bgcolor="" bordercolor="#FFFFFF" align="left">
  <tr>
  
   
<?php
	$kolom=3;
	$x = 0;
	if($numrows > 0){
	while($data=mysql_fetch_array($result))
		{
		    if ($x >= $kolom) 
			    {
			      echo "</tr><tr>";
			      $x = 0;
				}
	$x++;
?>

<td align=center>			 
	<div class ="teks_nama_produk">
    	<?php echo $data['nm_produk']; ?><br><br>
    </div>
    
    <div>
		<img width='100px' height='140px' valign='top' border='1,5' src="admin/gambar_produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		 
	
    <div class ="teks_harga_produk">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>

    <div>
        <?php

		echo '
	<a href="keranjang.php?id='.$data['id_produk'].'"><img src="IMAGE/TBeli.jpg"\ title="Buy Now" border="0" width=\"50\" height=\"30\"></a><a href="produk_detail.php?id='.$data['id_produk'].'"><img src="IMAGE/TDetail.jpg"\ title="Detail Product" border="0" width=\"50\" height=\"30\"></a>';
		
		?>
	</div>
        <hr />	
</td>
            
<?php
	}
	}
?>

</tr>
</table>
</form>
