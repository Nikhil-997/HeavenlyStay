<?php
include "dbcon.php";
//$i=1;
$roomno=$_POST[roomno];
$sql1="select * from room where roomno='$roomno' and status='active'";
$query=$con->query($sql1);
$count = $query->num_rows;
if($count  >= 1)
{
	//echo "<script> alert('room exists'); </script>";
}
 -->
else
{
  $sql = "INSERT INTO `room`(`roomid`,`roomtype`,`roomno`,`price`,`status`) VALUES ('','$_POST[roomtype]','$_POST[roomno]','$_POST[price]','active')";
 $aa=$con->query($sql);
 //echo "<script> alert('room record inserted successfully..	'); </script>";
}
 
 //header("location:admin-dashboard.php");
 //echo "<script>window.location='admin-dashboard.php';</script>";
?>

