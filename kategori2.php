<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Produk</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />


<style type= "text/css">
.Teks_Testimonial{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
	text-align:center;
}
</style>

</head>	

<!--navbar atas-->	
<?php 
if(@$_SESSION['emailpelanggan']==""){
?>	
				  <div class="top-right">
                    <ul>
						<li><a href="login1.php">Login</a></li>
						<li><a href="registermember.php"> Register </a></li>
					</ul>
				  </div>
<?php }
else {?>
				  <div class="login-right">
                    <ul>
                    	<li><a href="editmember.php"><?php echo @$_SESSION[emailpelanggan] ?></a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				  </div>
<?php }?>
<!---end navbar atas-->
  
  
<body background="IMAGE/background.jpg">
<div id ="header"> </div>
<div id ="navbar">
 <div class="navmenu"> 
<?php 
if(@$_SESSION['emailpelanggan']==""){
?>
 <ul>
 <li><a href ="index.php"> Home </a></li>
 <li><a href ="produk.php"> Product </a></li>
 <li><a href ="carapesan.php"> How to Order </a></li>
 <li><a href ="contact.php"> Contact Us  </a></li>
 </ul>
<?php }
else {?>
 <ul>
 <li><a href ="index.php"> Home </a></li>
 <li><a href ="produk.php"> Product </a></li>
 <li><a href ="carapesan.php"> How to Order </a></li>
 <li><a href ="contact.php"> Contact Us  </a></li>
 <li><a href ="konfirmasi.php"> Payment Confirmation </a></li>
 <li><a href ="history.php"> History </a></li>
 </ul>
<?php } ?>
 <!--end nav menu--></div>
 <p>&nbsp;</p>
</div>

<table width="962" border="0" align="center" cellpadding="0" cellspacing="0">
   
   <tr>
     <td width="232" rowspan="6" align="center" valign="top" bgcolor="#F7D5BO">
       <table width="262" border="0">
         <!-- Kategori -->
         <tr>
           <td width="256" bgcolor="#F7D5BO"><p><img src="IMAGE/kat.png"  /></p> </td>
         </tr>
         <tr>
           <td bgcolor="#F7D5BO">
           <a href='kategori1.php'><img src="IMAGE/kategori1.png" /></a><br />
           <a href='kategori2.php'><img src="IMAGE/kategori2.png" /></a><br />
           <a href='kategori3.php'><img src="IMAGE/kategori3.png" /></a>  
             <p>&nbsp;</p>
             <p><img src="IMAGE/tracking.png" /></p>
               <form id="form1" name="form1" method="post" action="tracking.php">
                 <table width="197" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <td width="197" height="48" align="center" valign="middle"><label for="kode"></label>
                     <input type="text" name="kode" placeholder="Transaction Code" id="kode" /></td>
                   </tr>
                   <tr>
                     <td height="58" align="center" valign="middle"><input type="text" name="email" placeholder="Input Your Email" id="email" /></td>
                   </tr>
                   <tr>
                     <td align="center" valign="middle"><input type="image" src="IMAGE/track.jpg" alt="submit" /></td>
                   </tr>
                 </table>
               </form>
               <p>&nbsp;</p>
               <p><img src="IMAGE/Untitled copy.png" /></p>
               
           </td>
         </tr>
       </table>
         
     </td>
     <td width="524" rowspan="6" align="center" valign="top" bgcolor="#F7D5BO"><p>&nbsp;</p>

   <!--PANGGIL KATALOG PRODUK-->
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

	$a="Flower Bouquet";
	$query = "select * from produk where kategori like '%$a%' ";
	$hasil = mysql_query($query);
	$numrows = mysql_num_rows($hasil);

	
	
	//Paging Data sebanyak .. data product perlembar
	$jumlah = mysql_num_rows($hasil);
	$limit = 9;
	if (empty($offset)) {
		$offset = 0;
	}
		if(isset($_GET['offset'])){$offset = $_GET['offset']; }
		$seleksi = "SELECT * FROM produk where kategori like '%$a%' LIMIT $offset, $limit";
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
						echo "<b><font face=\"arial\" size=\"2\"> <a href=\"kategori1.php?&offset=$newoffset\">$i</a></font></B>";
					} else { 
						echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
					} 
			}
						echo "</div><br><br>";
	    //Batas kode paging data
	
?>



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

       <!--END KATALOG PRODUK-->
  
     </td>
     <td width="201" height="412" align="center" valign="top" bgcolor="#F7D5BO"><p><img src="IMAGE/shopping cart.png" alt="kt" /></p>
     <p>&nbsp;</p>
     <p><a href="keranjang_belanja.php"><img src="IMAGE/cart.png" width="170" height="170" alt="keranjang" /></p>
     </td>
     <td width="5" rowspan="5" bgcolor="#F7D5BO"></td>
  </tr>
   <tr>
     <td height="113" class="Teks_Testimonial" align="center" valign="top" bgcolor="#F7D5BO">     
<?php
	$koneksi= mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bungadb");
    $tampil="SELECT * FROM sementara";
	$query=mysql_query($tampil)or die(mysql_error());
	$jumlah=mysql_num_rows($query);
	
	while($data=mysql_fetch_assoc($query))
	{
	$total=$data['total'];
	$subtotal[]=$total;
	$jml=$data['jumbel'];
	$jml1[]=$jml;
	}
	@$subtotal1=array_sum(@$subtotal);
	@$jml2=array_sum(@$jml1);
	?>
     
	<?php echo "Rp " .number_format($subtotal1, 0, ',', '.').",-" ?><br>
    <?php 
	if ($jml2==0)
	{ 
	echo "0 Qty <br>"; 
	}
	else
	{
	echo "$jml2 Qty <br>" ;
    }
    ?>

	
    </td>
  </tr>
   <tr>
     <td height="19" align="center" valign="top" bgcolor="#F7D5BO"><img src="IMAGE/testimonials.png" alt="kt" /></td>
   </tr>
              <tr>
                <td>                
  </tr>
              <tr>
 <td valign="top"   class="Teks_Testimonial" bgcolor="#F7D5BO" scope="col"><?php include "top_testimoni.php"; ?></td>  </tr>
              <tr>
                <td height="74" valign="top" bgcolor="#F7D5BO"   class="Teks_Testimonial" scope="col">
  <?php 
if(@$_SESSION['emailpelanggan']==""){
?>
                  <a href="message.php" style="color:#06F" >>> add testimonial</a><br />
  <?php } else {?>
                  <a href="isitesti.php" style="color:#06F" >>> add testimonial</a><br />
  <?php } ?>
                </td>
                <td bgcolor="#F7D5BO"></td>
  </tr>

 </table>
<div id="footer">
  <div align="center"></div>
</div>
</body>
</html>
