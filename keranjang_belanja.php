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

<?php } ?>
 <!--end nav menu--></div>
 <p>&nbsp;</p>

</div>

 <?php
$koneksi= mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("bungadb");
$tampil="SELECT * FROM sementara";
$query=mysql_query($tampil)or die(mysql_error());
$jumlah=mysql_num_rows($query);
?>

<div id="tulisan">
  <form id="form1" name="form1" method="post" action="">
 <table width="962" border="1" style="border:#000" align="center" bgcolor="#F7D5BO">
 <tr>
 <td colspan="7" align="center"><img src="IMAGE/shopping.png" width="962" height="100" /></td>
 </tr>
 <tr>
   <td height="44" colspan="7" align="right"><a href="hapustemporary.php"><img src="IMAGE/clear1.png" width="100" /></a></td>
 </tr>

 <tr align="center" bgcolor="#81D1BF">
   <td width="7%" height="35"><b>No.</b></td>
   <td width="7%" ><b>ID Product</b></td>
   <td width="23%" ><b>Product</b></td>
   <td width="7%" ><b>Qty</b></td>
   <td width="15%"><b>Price</b></td>
   <td width="15%"><b>Subtotal</b></td>
   <td width="8%" ><b>Delete</b></td>
 </tr>

  <?php
  $no=1;
  while ($row=mysql_fetch_array($query))
  {
	  $a=$row['id_produk'];
	  $b=$row['nm_produk'];
	  $c=$row['jumbel'];
	  $d=$row['harga'];
	  $e=$row['total'];
	  $f=$row['gambar'];
	  $total[]=$e;
	  
	  ?>
      <tr align="center">
      <td height="45"> <?php echo $no;?> </td>
      <td><?php echo $a;?></td>
      <td><img width='41' height='47' valign='top' border='1,5' src="admin/gambar_produk/<?php echo $f; ?>"> <?php echo $b;?></td>
      <td><?php echo $c;?></td>
      <td><?php echo "Rp " .number_format($d, 0, ',', '.').",-" ?></td>
      <td><?php echo "Rp " .number_format($e, 0, ',', '.').",-" ?></td>
	  <td width="8%"><a href="deletetemp.php?id=<?=$a;?>" onclick="returnconfirm("Are you sure want to delete this data?");"><img src="IMAGE/delete.png"/></a></td>
    </tr>
        <?php 
		$no++;} @$subtotal=array_sum(@$total); ?>
        <tr>
        <td height="35" colspan="77">Grand Total : <?php echo "Rp " .number_format($subtotal, 0, ',', '.').",-" ?></td>
      </tr>
        <tr>
        <td height="35" colspan="7"> Record Total : <?php echo $jumlah; ?></td>
        </tr>
  </table>
        
        <table width="64%"  align="center" >
        <tr>
        <td width="30%" valign="top">
     <a href="produk.php"><img src="IMAGE/back1.png" title="Back to shopping" width="100" height="102" /></a></td>
     <td width="35%" align="center"></td>
     <td width="35%" align="right" valign="top"><a href="transaksi.php"><img src="IMAGE/next1.png" width="100" height="102" title="Checkout" /></a></td>
        </tr>
     </table>

  </form>
</div>

</form>    
</div>
</body>
</html>
