<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
@session_start();
include "kon/koneksi.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Confirmation</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

#judul {	padding:15px;
	text-align:center;
	color:#fff;
	font-size: 20px;

}

</style>
</head>	
			<body background="IMAGE/background.jpg">
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
					  <form action="simpan_konfirmasi.php" enctype='multipart/form-data' method="post">
						  <div class="key">
							<p><i class="fa fa-envelope" aria-hidden="true"></i></p>
								<p>
								  <img src="IMAGE/logo.png" width="344" height="130" alt="logo" /></p>

								<div class="clearfix"></div>
						</div>
							
                                <p><div id="judul"> <h2> Payment Confirmation </h2>	 					
							  <input name="trans" type="text"  placeholder="Input Your Transaction Code" value="" size="30" />			            
                              <p >
                                <select name="bank" id="bank" >
                                  <option value=0 selected>- Select Bank -</option>
                                  <option>Mandiri </option>
                                  <option>BCA</option>
                                </select>
                                </td>
						      </p>
								  <p >
								    <input name="fupload" type="file" id="fupload" />
				        </p>
                        </div>

								<p align="left">&nbsp; </p>
								<div class="clearfix"></div></div>
						
						<input type="image" src="IMAGE/Tok.jpg" alt="submit" />
					  </form>
				  
                  
					<div class="forg">
						<a href="index.php" class="forg-right">Back to Home</a>
					<div class="clearfix"></div>
					</div>
                    </div>
				</div>
			</div>


</body>
</html>
