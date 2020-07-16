<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Member</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.btn {	background-color: #F7D5BO;
	border-radius: 10px;
	color: #fff;
}
.lg {	width: 240px;
}
#inputan {	background-color: #FF6;
	padding: 20px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}
#judul {	padding:15px;
	text-align:center;
	color:#fff;
	font-size: 20px;
	background-color:#F60;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-bottom: 3px solid #336666;
}
#utama {	width:300px;
	margin:0 auto;
	margin-top:12%;
}
</style>
</head>	
				<!--login--><body background="IMAGE/background.jpg">
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
					  <form action="" method="post">
						  <div class="key">
							<p><i class="fa fa-envelope" aria-hidden="true"></i></p>
								<p>
								  <img src="IMAGE/header1.png" alt="logo" width="344" height="97" /></p>
								<p>
								  <input type="text" name="email" placeholder="Email" />
						    </p>
								<div class="clearfix"></div>
						</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input type="password" name="password" placeholder="Password" />
								<div class="clearfix"></div>
							</div>
							<input type="submit" name="login" value="Login">
					  </form>
				  </div>
					<div class="forg">
						<a href="index.php" class="forg-left">Back to Home</a>
						<a href="registermember.php" class="forg-right">Create Account</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--login-->

<?php session_start();
include "kon/koneksi.php";
$email =@$_POST['email'];
$email = str_replace("'","&acute;",$email);
$password =@$_POST['password'];
$password= str_replace("'","&acute;",$password);
$login =@$_POST['login'];




if($login) {
	if($email == "" || $password == "") {
		?> <script type="text/javascript">alert("Please Input Your Username and Password");</script> <?php
	} 
	else {
    $sql = mysql_query("select*from customer where email_cst = '$email' and pwd_cst = '$password' ") or die (mysql_error());
	$data = mysql_fetch_array($sql);
	$cek = mysql_num_rows($sql);

	if($cek>=1){
		//jika data ditemukan maka buka halaman menu utama dan sekaligus membuka session

			//	  session_start();
  			//session_register("idlogin");
  			//session_register("emailpelanggan");
  			//session_register("namapelanggan");
  			//session_register("alamatpelanggan");
  			$_SESSION[idlogin]     = $data['id_cst'];
  			$_SESSION[emailpelanggan]     = $data['email_cst'];
  			$_SESSION[namapelanggan]     = $data['nm_cst'];
  			//$_SESSION[alamatpelanggan]     = $data['address_cst'];
			//$_SESSION[areapelanggan]     = $data['id_area'];

header("location:index.php");
	}
	else {
		?> <script type="text/javascript">alert("Sorry, Your Username or Password Was Wrong");</script> <?php 
	}
    }
}
?>



</body>
</html>
