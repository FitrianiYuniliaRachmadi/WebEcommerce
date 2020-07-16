<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
<link href="CSS/style_kategori.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>
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
 <?php
$koneksi= mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("bungadb");
$id=@$_SESSION['idlogin'];
$tampil="SELECT * FROM transaksi where id_cst= '".$id."'";
$query=mysql_query($tampil)or die(mysql_error());
$jumlah=mysql_num_rows($query);
?>
<div id="tulisan">
 <table width="962" border="1" style="border:#000" align="center" bgcolor="#F7D5BO">
 <tr>
   <td colspan="7" align="center"><h1><b>HISTORY</b></h1></td>
 </tr>
 <tr align="center" bgcolor="#81D1BF">
   <td width="15%" ><b>Transaction Code</b></td>
   <td width="10%" ><b>Date</b></td>
   <td width="7%" ><b>Time</b></td>
   <td width="15%" ><b>Total</b></td>
   <td width="15%" ><b>Status</b></td>
   <td width="15%" ><b>Upload Proof of Payment</b></td>
   <td width="8%" ><b>Print</b></td>
 </tr>

  <?php
  while ($row=mysql_fetch_array($query))
  {
	  $a=$row['no_trans'];
	  $b=$row['tanggal_trans'];
	  $c=$row['jam_trans'];
	  $d=$row['total'];
	  $e=$row['status'];
	  $tampil1="SELECT * FROM konfirmasi_pembayaran where no_trans= '".$a."'";
	  $query1=mysql_query($tampil1)or die(mysql_error());
	  $jumlah1=mysql_num_rows($query1);
	  ?>
      <tr align="center">
      <td><?php echo $a;?></td>
      <td><?php echo $b;?></td>
      <td><?php echo $c;?></td>
      <td><?php echo "Rp " .number_format($d, 0, ',', '.').",-" ?></td>
      <td><?php echo $e;?></td>
      <td><?php if($jumlah1=='0'){?>
      -
      <?php } else { ?>
      <img src="IMAGE/checked.png" width="24" height="24" /><?php } ?>
        </td>
		<td width="8%"><a href="struk.php?kode=<?=$a;?>" target='_blank' ><img src="IMAGE/print.png"/></a></td>
    </tr>
        <?php } ?>
        </table>
  <table width="962" border="0" style="border:#000" align="center" bgcolor="#F7D5BO">
  <tr>
    <td height="163">&nbsp;</td>
  </tr>
</table>

</div>
 <div id="footer">
  <div align="center"></div>
</div>
</body>
</html>
