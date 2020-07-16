<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />

<style type= "text/css">
.Teks_Testimonial{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
	text-align:center;
}
.Teks_Produk{
	font-family:Verdana, Geneva, sans-serif;
	font-size: 19px;
	color: #F66;
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
     <td width="189" height="466" rowspan="5" align="center" valign="top" bgcolor="F7D5BO">
       <table width="203" border="0">
         <!-- Kategori -->
         <tr>
           <td width="197" bgcolor="F7D5BO"><p><img src="IMAGE/kat.png" alt="kt" /></p> </td>
         </tr>
         <tr>
           <td bgcolor="F7D5BO">
           <a href='kategori1.php'><img src="IMAGE/kategori1.png" /></a><br />
           <a href='kategori2.php'><img src="IMAGE/kategori2.png" /></a><br />
           <a href='kategori3.php'><img src="IMAGE/kategori3.png" /></a>  
             <p>&nbsp;</p>
             <p><img src="IMAGE/tracking.png" alt="kt"/></p>
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
               <p><img src="IMAGE/Untitled copy.png" width="211" height="316" /></p>
           </td>
         </tr>
       </table>
         
     </td>

   <!--PANGGIL DETAIL PRODUK-->
     <td width="539" height="0" rowspan="6" align="center" valign="top" bgcolor="#F7D5BO">

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="Area_Produk">
      <tr>
        <th align="center" valign="top" class="Teks_Produk" scope="col">
        <p>&nbsp;</p>
        <p>PRODUCT DETAIL </p>
        </th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col">
        <hr color="#f66"  /></th>
      </tr>
      <tr>
        <td align="center" valign="top"><div class="Area_Produk">
          <?php include "produk_detail_info.php"; ?>
        </div>
        <hr color="#f66" />
        </td>
      </tr>
    </table></th>

       <!--END DETAIL PRODUK-->
  
     </td>
     <td height="296" align="center" valign="top" bgcolor="#F7D5BO"><p><img src="IMAGE/shopping cart.png" alt="kt" /></p>
     <p><a href="keranjang_belanja.php"><img src="IMAGE/cart.png" width="170" height="170" alt="keranjang" /></p>
</td>
     <td rowspan="5" bgcolor="#F7D5BO"></td>
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
 <td height="290" valign="top" bgcolor="#F7D5BO"   class="Teks_Testimonial" scope="col"><?php include "top_testimoni.php"; ?><br />
 
<p>
  <?php 
if(@$_SESSION['emailpelanggan']==""){
?>
</p>
<p>  <a href="message.php" style="color:#06F" >>> add testimonial</a><br />
  <?php } else {?>
  <a href="isitesti.php" style="color:#06F" >>> add testimonial</a><br />
</p>
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
