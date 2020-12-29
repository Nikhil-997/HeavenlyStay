<?php
include "dbcon.php";
$roomid=$_POST['roomid'];
$price=$_POST['price'];
$roomtype=$_POST['roomtype'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$noofadults=$_POST['noofadults'];
$noofchildren=$_POST['noofchildren'];
/* $sq="select * from room where roomid ='$roomid' and roomstatus='available'";
$c=$con->query($sq);
$data=mysqli_fetch_array($c);
$counts=mysqli_num_rows($c);
if($data['roomstatus']=='available')
{ */
  /*$sql = "INSERT INTO `roombooking`(`roombookingid`,`roomno`,`checkindate`,`checkoutdate`,`adults`,`children`,`status`) 
  VALUES 
  ('','$roomtype','$_POST[checkin]','$_POST[checkout]','$_POST[noofadults]','$_POST[noofchildren]','active')";
 $aa=$con->query($sql);*/
 
 
 
  echo "payment.php?price=$price&roomid=$roomid&roomtype=$roomtype&checkin=$_POST[checkin]&checkout=$_POST[checkout]&noofadults=$_POST[noofadults]&noofchildren=$_POST[noofchildren]";
/* }
else
{
	echo "0";
	//print '<script>alert('.$data['roomstatus'].'); </script>';
}
 */

?>
