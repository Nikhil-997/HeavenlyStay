<?php
session_start();
include "dbcon.php";
$halltype=$_REQUEST['halltype1'];
$price=$_REQUEST['price'];
$acnonac=$_REQUEST['acnonac'];
$fdate=$_REQUEST['fdate'];
$tdate=$_REQUEST['tdate'];
$strength=$_REQUEST['strength'];
$food=$_REQUEST['food'];
$noofveg=$_REQUEST['noofveg'];
$noofnonveg=$_REQUEST['noofnonveg'];
$option=$_REQUEST['option'];
if($option=="Cash")
{
   $paymode="Cash";
   $amt=$_POST['amount'];
   $gst=$_POST['amount']*12/100;
   $paymentstatus="unpaid";
}
else
{
	$paymode="Card";
	$amt=$_POST['amount1'];
	$gst=$_POST['amount1']*12/100;
	$paymentstatus="paid";
}


  $sql1 = "INSERT INTO `servicebooking`(`servicebookingid`,`servicetitle`,`ac-non/ac`, `fdate`,`tdate`,`strength`,`food`,`noofveg`,`noofnonveg`,`customerid`,`status`) 
  VALUES('','$halltype','$acnonac','$fdate','$tdate','$strength','$food','$noofveg','$noofnonveg','$_SESSION[uid]','active')";
 $aa=$con->query($sql1);
 
 
  $sql = "INSERT INTO `payment-hall`(`paymentid`,`paidtype`,`paidamt`,`gst`,`paymentstatus`,`customerid`,`status`) 
  VALUES 
  ('','$paymode','$amt','$gst','$paymentstatus','$_SESSION[uid]','active')";
 $aa=$con->query($sql);
 
 
	print '<script>alert("Payment Successfull"); </script>';
	header("location:invoice-hall.php?price=$amt&halltype=$halltype");
 
?>
