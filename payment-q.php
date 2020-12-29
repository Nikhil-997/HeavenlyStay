
<?php
session_start();
include "dbcon.php";
//$roomtype=$_POST['roomtype'];

//$gst=$_POST['amount']*12/100;
//$amt=$_POST['amount'];
//$gst=$_POST['amount']*12/100;


$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$noofadults=$_POST['noofadults'];
$noofchildren=$_POST['noofchildren'];
$option=$_POST['option'];

if($option=="Cash")
{
   $paymode="Cash";
  
   $amt=$_POST['amount'];
   $roomtype=$_POST['roomtype'];
   $gst=$_POST['amount']*12/100;
   $paymentstatus="unpaid";
}
else
{
 $amt=$_POST['amount1'];
$paymode="Card";
$roomtype=$_POST['roomtype1'];
$gst=$_POST['amount1']*12/100;
 $paymentstatus="paid";
}
$sql = "INSERT INTO `roombooking`(`roombookingid`,`roomno`,`checkindate`,`checkoutdate`,`adults`,`children`,`status`) 
  VALUES 
  ('','$roomtype','$checkin','$checkout','$noofadults','$noofchildren','active')";
 $aa=$con->query($sql);
 

 $sqlU = "Update room SET roomstatus='Unavailable' WHERE roomid='$_POST[roomid]'";
 $con->query($sqlU); 
 
  $sql = "INSERT INTO `payment`(`paymentid`,`paidtype`,`paidamt`,`gst`,`paymentstatus`,`customerid`,`status`) 
  VALUES 
 ('','$paymode','$amt','$gst','$paymentstatus','$_SESSION[uid]','active')";
 $aa=$con->query($sql);
 
 print '<script>alert("Payment Successfull"); </script>';
 header("location:invoice.php?price=$amt&roomtype=$roomtype&checkin=$checkin&checkout=$checkout&noofadults=$noofadults=$noofchildren");
?>
