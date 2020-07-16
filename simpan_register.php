
<?php
include("KON/koneksi.php");

if ($_POST['pwd_cst2']==$_POST['pwd_cst'])
{
$query = "INSERT INTO customer ( nm_cst, jkel, telp_cst, email_cst, pwd_cst)
	  VALUES (
	                   '$_POST[nm_cst]',
                       '$_POST[jkel]',
					   '$_POST[telp_cst]',
                       '$_POST[email_cst]',
                       '$_POST[pwd_cst]')";
	  
	  $result = mysql_query($query);
		if ($result) 
		{ echo"<script>alert('Registration was succesful. Please login to make an order');window.location.href=('index.php')</script>"; }
}
else
{
	echo"<script>alert('Sorry, your password is not same, please re-input your registry');window.location.href=('registermember.php')</script>";
}
?>
