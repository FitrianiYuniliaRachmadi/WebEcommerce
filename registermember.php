<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Member</title>



</head>	
  
<body background="IMAGE/background.jpg">
<style type="text/css">
#tulisan{
	
	color:#000;
	font-family:"Arial Black", Gadget, sans-serif;
}
</style>

 
<div id ="tulisan">
<form action="simpan_register.php" method="post" name="form2" id="form2">
  <table  width="1078" height="604" align="center" cellpadding="0" cellspacing="0" background="IMAGE/1.png">
    <tr valign="baseline">
      <td height="19" colspan="4" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td height="162" colspan="4" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td height="139" colspan="3" align="right" valign="middle" nowrap="nowrap"><p>&nbsp;</p>
        <p><img src="IMAGE/logo.png" width="211" height="77" alt="logo" /></p></td>
      <td height="139" align="center" valign="middle" nowrap="nowrap"><h1>REGISTER</h1></td>
      </tr>
    <tr valign="baseline">
      <td width="13" height="32" align="left" nowrap="nowrap">&nbsp;</td>
      <td width="347" align="right" nowrap="nowrap">Name</td>
      <td width="21" align="center" valign="top">:</td>
      <td width="695"><input type="text" name="nm_cst" value="" size="50" /></td>
      </tr>

    <tr valign="baseline">
      <td height="35" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Gender</td>
      <td align="center" valign="top">:</td>
      <td>
      <input name="jkel" type="radio" id="jkel" value="P"  />
      Male
      <input name="jkel" type="radio" id="jkel" value="W"  />
      </label>Female
      </td>
      </tr>
    <tr valign="baseline">
      <td height="30" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Telephone</td>
      <td align="center" valign="top">:</td>
      <td><input type="text" name="telp_cst" value="" size="25" /></td>
      </tr>
    <tr valign="baseline">
      <td height="36" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Email</td>
      <td align="center" valign="top">:</td>
      <td><input type="text" name="email_cst" value="" size="40" /></td>
      </tr>
    <tr valign="baseline">
      <td height="43" align="left" nowrap="nowrap">&nbsp;</td>
      <td nowrap="nowrap" align="right">Password</td>
      <td align="center" valign="top">:</td>
      <td><input type="password" name="pwd_cst" value="" size="25"  maxlength="8" placeholder="max 8 character"/></td>
      </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">&nbsp;</td>
      <td nowrap="nowrap" align="right">Re-Password</td>
      <td align="center" valign="top">:</td>
      <td><input type="password" name="pwd_cst2" value="" size="25" placeholder="re-input your password" /></td>
      </tr>
    <tr valign="baseline">
      <td height="50" colspan="4" align="center" valign="middle" nowrap="nowrap"><p>
        <input type="submit" value="Register" onclick="info.php" /> 
        <input type="reset" value="Cancel" onclick=onclick=self.history.back() />
        </p></td>
    </tr>
    </table>



</form>
</div>
<p>&nbsp;</p>
</body>
</html>
