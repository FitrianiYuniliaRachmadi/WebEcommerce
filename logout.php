<?php session_start();
if(isset($_SESSION['emailpelanggan']))
  unset($_SESSION['emailpelanggan']);
  echo "<script>alert('Successfully Logout');window.location.href=('index.php')</script>";
  //header("location:index.php");
?>
