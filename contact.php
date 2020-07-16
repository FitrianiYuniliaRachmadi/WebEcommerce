<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
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
 <!--end nav menu--> </div>
 <p>&nbsp;</p>
</div>
<table width="962" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7D5BO">  
   <tr>
     <td width="962" height="442"><img src="IMAGE/contact us.jpg" /></td>
  </tr>


 </table>
 <div id="footer">
  <div align="center"></div>
</div>
</body>
</html>
