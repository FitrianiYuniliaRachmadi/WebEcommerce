<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
@session_start();
include "kon/koneksi.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Testimonial</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.btn {	background-color: #FF6600;
	border-radius: 10px;
	color: #fff;
}
.lg {	width: 240px;
}
#inputan {	background-color: #F7D5BO;
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
			<body background="IMAGE/background.jpg">
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
					  <form action="simpan_testi.php" method="post">
						  <div class="key">
							<p><i class="fa fa-envelope" aria-hidden="true"></i></p>
								<p>
								  <img src="IMAGE/logo.png" width="344" height="130" alt="logo" /></p>
								<p>
								  <input type="text" name="email" <?php echo"".(@$_SESSION[emailpelanggan])."" ?> disabled="disabled"/>
						    </p>
								<div class="clearfix"></div>
						</div>
							<div class="key">
								<p><i class="fa fa-lock" aria-hidden="true"></i>
								  <textarea name="testi" cols="45" placeholder="Input Your Testimoni"></textarea>
							  </p>
								<p>&nbsp; </p>
								<div class="clearfix"></div>
						</div>
							<input type="submit" name="save" value="OK">
					  </form>
				  </div>
					<div class="forg">
						<a href="index.php" class="forg-right">Back to Home</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>


</body>
</html>
