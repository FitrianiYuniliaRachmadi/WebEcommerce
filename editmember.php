<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data</title>
</head>

<body background="IMAGE/background.jpg">
<style type="text/css">
#tulisan{
	
	color:#000;
	font-family:"Arial Black", Gadget, sans-serif;
}
</style>

<?php
require("KON/koneksi.php");
$a = $_SESSION['idlogin'];
$cek="Select * from customer where id_cst = '".$a."'";
$hasil = mysql_query($cek);
$result = mysql_num_rows($hasil);
$data=mysql_fetch_array($hasil);

	  $b=$data['nm_cst'];
	  $d=$data['jkel'];
	  $e=$data['telp_cst'];
	  $f=$data['email_cst'];
	  $g=$data['pwd_cst'];
?>
 
<div id ="tulisan">
<form id="form1" name="form1" method="post" action="updatemember.php">
  <table  width="1078" height="596" align="center" cellpadding="0" cellspacing="0" background="IMAGE/1.png">
    <tr valign="baseline">
      <td height="139" colspan="4" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td height="35" colspan="4" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td height="139" colspan="3" align="right" valign="middle" nowrap="nowrap"><p>&nbsp;</p>
        <p><img src="IMAGE/logo.png" width="211" height="77" alt="logo" /></p></td>
      <td height="139" align="center" valign="middle" nowrap="nowrap"><h1>Data</h1></td>
      </tr>
    <tr valign="baseline">
      <td height="32" align="left" nowrap="nowrap">&nbsp;</td>
      <td align="right" nowrap="nowrap">ID</td>
      <td align="center" valign="top">:</td>
      <td><input type="text" name="id_cst" value="<?php echo $a;?>" size="50" disabled="disabled"/></td>
    </tr>
    <tr valign="baseline">
      <td width="13" height="32" align="left" nowrap="nowrap">&nbsp;</td>
      <td width="347" align="right" nowrap="nowrap">Name</td>
      <td width="21" align="center" valign="top">:</td>
      <td width="695"><input type="text" name="nm_cst" value="<?php echo $b;?>" size="50" /> </td>
      </tr>

    <tr valign="baseline">
      <td height="35" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Gender</td>
      <td align="center" valign="top">:</td>
      <td>
    <?php
  	if ($d=="P")
	{
	?>
      <input name="jkel" type="radio" id="jkel" value="P"  checked="checked"  />
      Male
      <input name="jkel" type="radio" id="jkel" value="W"  />
      </label>Female
	<?php
	}
	else
	{
	?>
      <input name="jkel" type="radio" id="jkel" value="P"    />
      Male
      <input name="jkel" type="radio" id="jkel" value="W" checked="checked" />
      </label>Female
     <?php }?>
      


 
 	 
    
    </td>
      </tr>
    <tr valign="baseline">
      <td height="30" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Telephone</td>
      <td align="center" valign="top">:</td>
      <td><input type="text" name="telp_cst" value="<?php echo $e;?>" size="25" /></td>
      </tr>
    <tr valign="baseline">
      <td height="36" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Email</td>
      <td align="center" valign="top">:</td>
      <td><input type="text" name="email_cst" value="<?php echo $f;?>" size="40" disabled="disabled"/></td>
      </tr>
    <tr valign="baseline">
      <td height="31" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Password</td>
      <td align="center" valign="top">:</td>
      <td><input type="password" name="pwd_cst" value="<?php echo $g;?>" size="25" /></td>
      </tr>
    
    <tr valign="baseline">
      <td height="50" colspan="4" align="center" valign="middle" nowrap="nowrap"><p>
        <input type="image" src="IMAGE/Tupdate.jpg" alt="submit" /> 
        <a href="index.php"><img src="IMAGE/TBatal.jpg" /> </a>
        </p></td>
    </tr>
    </table>



</form>
</div>
<p>&nbsp;</p>
</body>
</html>
