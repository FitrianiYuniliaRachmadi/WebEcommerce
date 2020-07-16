<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
						<li><a href="registermember.php" target="new"> Register </a></li>
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
<table width="962" border="0" align="center" cellpadding="0" cellspacing="0">
   
   <tr>
     <td width="189" rowspan="6" align="center" valign="top" bgcolor="#F7D5BO"><table width="261" border="0">
       <!-- Kategori -->
       <tr>
         <td width="255" bgcolor="#F7D5BO"><br /><img src="IMAGE/kat.png" alt="kt" /><br /></td>
       </tr>
       <tr>
         <td height="815" valign="top" bgcolor="#F7D5BO">
           <a href='kategori1.php'><img src="IMAGE/kategori1.png" /></a><br />
           <a href='kategori2.php'><img src="IMAGE/kategori2.png" /></a><br />
           <a href='kategori3.php'><img src="IMAGE/kategori3.png" /></a>  
           <p>&nbsp;</p>
           <p><img src="IMAGE/tracking.png" alt="kt"/></p>
           <form id="form1" name="form1" method="post" action="tracking.php">
             <table width="206" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td width="206" height="48" align="center" valign="middle"><label for="kode"></label>
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
           <p><img src="IMAGE/Untitled copy.png" alt="" /></p></td>
       </tr>
     </table></td>
     <td width="539" rowspan="6" align="justify" valign="middle" bgcolor="#F7D5BO">
 
   <!--start image slider-->
       <table width="439" height="228" border="0" cellpadding="0" cellspacing="0">
         <tr>
           <td><?php include "index.html"?>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           </td>
         </tr>
       </table>
  <!--end image slider-->
 <!--PANGGIL KATALOG PRODUK-->
 <?php  @session_start();
 include "produk_catalog.php"; 
 ?>
       <!--END KATALOG PRODUK-->
  
     </td>
     <td height="354" align="center" valign="top" bgcolor="#F7D5BO"><p><img src="IMAGE/shopping cart.png"  alt="kt" /></p>
     <p><a href="keranjang_belanja.php"><img src="IMAGE/cart.png" width="170" height="170" alt="keranjang" /></p>
</td>
     <td rowspan="5" bgcolor="#F3B9BA"></td>
  </tr>
   <tr>
     <td height="76" class="Teks_Testimonial" align="center" valign="top" bgcolor="#F7D5BO">     
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
     <td height="19" align="center" valign="top" bgcolor="#F7D5BO">
     <p><img src="IMAGE/testimonials.png"  alt="kt" /></p></td>
   </tr>

              <tr>
 <td valign="top"   class="Teks_Testimonial" bgcolor="#F7D5BO" scope="col"><?php include "top_testimoni.php"; ?>
 <br />            
  <?php 
if(@$_SESSION['emailpelanggan']==""){
?>
<p>
                  <a href="message.php" style="color:#06F" >>> add testimonial</a><br />
  <?php } else {?>
                  <a href="isitesti.php" style="color:#06F" >>> add testimonial</a><br />
  <?php } ?>
  </p>
                </td>
                
  </tr>

 </table>



<div id="footer">
  <div align="center"  ></div>
</div>
</body>
</html>
