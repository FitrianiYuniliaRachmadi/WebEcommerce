<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="erudisi/metro.css" rel="stylesheet">
<script src="erudisi/jquery-2.1.3.min.js"></script>
<script src="erudisi/metro.js"></script>
<title>Untitled Document</title>
<style type="text/css">

textarea{
	resize:none;
}
</style>
<script type="text/javascript">
function validasi_input(form){
 if (form.area.value =="pilih"){
    alert("Please select Shipping Area!");
    return (false);
 }
return (true);
}
</script>
<style type="text/css">
.catatan {
	width: 250px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 11px;
	color: #930;
}


</style>
</head>

<body>
<h4 align="center"><strong>Please fill all required data.</strong></h4>
<hr />
<?php
//session_start();
	require ("KON/koneksi.php");
	require("rupiah.php");
	
    //<!--start buka temporary --->
      
	$cek="Select * from sementara ";
	$hasil = mysql_query($cek);
	$result = mysql_num_rows($hasil);
    $query=mysql_query($cek)or die(mysql_error());
	if($result == 0)
	{
		echo"<script>window.alert('Your shopping cart is empty.');
		window.location=('keranjang_belanja.php')</script>";
	}

	else
	{
		echo"<table id='judul_beli' border=0 cellpadding=5 width='700' cellspacing=0 align=center>
				<tr>
				<td width='10' height='40' align='center'><b>No.</b></td>
				<td width='20' align='center'><b>Product Code</b></td>
				<td width='20' align='center'><b>Product Image</b></td>
				<td width='50' align='center'><b>Product Name</b></td>
				<td width='50' align='center'><b>Qty</b></td>
				<td width='70' align='center'><b>Price</b></td>
				<td width='70' align='center'><b>Total</b></td>
				</tr>
				<tr><td colspan=7><hr/></td><tr>
				";
			$no=1;
			
			 while ($r=mysql_fetch_array($query))
  	  {
	 			$harga		= rupiah($r['harga']);
				$total	= $r['harga'] * $r['jumbel'];
				@$jumlah =$jumlah + $r['jumbel'];
				@$subtotal		= $total + $subtotal;
				
				$subtotal_rp= rupiah($subtotal);
				$total_rp	= rupiah($total);

			echo"
			      <tr>
					<td align=center height='40'>$no</td>
					<td align=center>$r[id_produk]</td>
					<td align=center><img src='admin/gambar_produk/$r[gambar]' width=40 height=60</td>
					<td align=center >$r[nm_produk]</td>
					<td align=center>[$r[jumbel]]</td>
					<td align=right>Rp. $harga</td>
					<td align=right>Rp. $total_rp</td>
				</tr>";
				$no++;
	  }
			
			echo"
			    <tr><td colspan=7><hr/></td><tr>
				<tr>
				<td colspan=5 align=right><b>Subtotal</b> : </td>
				<td colspan=1 align=right><b>Rp.</b></td>
				<td colspan=1 align=right><b>$subtotal_rp</b><br/></td>
				</tr>";
			}
			echo "</table><br/>";
			//echo"jumlah Beli:$jumlah";
?>
<br/>
<hr/>
<div id="kotak_luar">
<form id="form1" name="form1" method="post" action="simpan_transaksi.php">
<table width="962" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="29" colspan="4" align="left" valign="middle" bgcolor="#B4B9E0">
    <marquee id="kotak_luar" width="auto" >If you order flower board you are required to write the message contained in the flower board</marquee>

    </td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="36" height="175" align="left" valign="top">&nbsp;</td>
    <td width="197" align="left" valign="top">Message</td>
    <td width="455" valign="top"><textarea id="kotak_luar" name="abc" cols="45" rows="5" required >  </textarea></td>
    <td width="274" valign="top">
    <div class="catatan"> 
      <p>Example: </p> 
        Happy Wedding Romeo & Juliet, From bungabang <br>
	  <p>If you buy more than 1 product, you can write your message:<br>Product code 1 : Happy Wedding Romeo & Juliet, From bungabang <br>
        Product code 2 : Deepest symphaty on the demise ... , From bungabang </p>
    </div> </td>
  </tr>
</table>
<hr>
  <table width="962" height="288" border="0" cellpadding="0" cellspacing="0">
  	<tr>
  	  <td height="27" colspan="5" align="left" valign="middle" bgcolor="#B4B9E0"><b>--RECIPIENT DATA--</b></td>
	  </tr>
    <tr>
      <td width="37" align="left" valign="middle">&nbsp;</td>
      <td width="195" align="left" valign="middle">Name </td>
      <td width="378" align="left" valign="middle"><input type="text" name="rname"  id="rname"  ></td>
      <td width="170" height="51" align="left" valign="top"><p>Telephone Number</p></td>
      <td width="193"><input name="rtelp" type="text"  id="rtelp" size="21" maxlength="12" ></td>
    </tr>
    <tr>
      <td rowspan="2" align="left" valign="top">&nbsp;</td>
      <td rowspan="2" align="left" valign="top">Address </td>
      <td rowspan="2" align="left"><textarea id="kotak_luar" name="radress" cols="35" rows="5" required> </textarea></td>
      <td height="40" align="left" valign="middle">Shipping Date</td>
      <td valign="top">
      <div class="input-control text" data-role="datepicker">
      <input type="text" name="rdate"  id="rdate" >
      </div>
      </td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" align="left" valign="bottom">
     
      </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Shipping Area</td>
      <td> <?php $kota=mysql_query("SELECT * FROM area");?>
        <select name="area" onChange="document.getElementById(\'nama\').value =
nama[this.value]" id="area">
          <option value="pilih" selected>--Select Area--</option>
          <?php while($data = mysql_fetch_array($kota)){
          $nmarea=$data['nm_area'];
	  	  echo "<option value= $nmarea >$nmarea</option>";
		  $jsArray .= "nama['" . $data['harga'] . "'] = '" . addslashes($data['harga']) . "';\n";
           }?>
        </select></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href ="keranjang_belanja.php"> <img src="IMAGE/back1.png" width="100" height="102" /></a></td>
      <td></td>
      <td></td>
      <td align="right" valign="middle"><input type="image" src="IMAGE/finish.png" width="100" height="102" alt="submit"  /></td>
	</tr>
  </table>
 </form>
</div>
<hr>
</body>
</html>
