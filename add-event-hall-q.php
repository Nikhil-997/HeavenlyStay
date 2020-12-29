<?php
session_start();
include "dbcon.php";
$halltype=$_POST['halltype'];
$price=$_POST['price'];

$acnonac=$_POST['acnonac'];
$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];
$strength=$_POST['strength'];
$food=$_POST['food'];
$noofveg=$_POST['noofveg'];
$noofnonveg=$_POST['noofnonveg'];
$sql = "SELECT * FROM  `servicebooking` WHERE servicetitle =  '$halltype' AND ((fdate BETWEEN  '$_POST[fdate]' AND  '$_POST[tdate]') OR ( tdate BETWEEN  '$_POST[fdate]' AND  '$_POST[tdate]') )"; 

 //$aa=mysqli_query($con,$sql);
$aa=$con->query($sql);
$exist=$aa->num_rows;;


if($exist==0)
{
  echo "<script>window.location='payment-hall.php?price=$price&halltype=$halltype&acnonac=$acnonac&fdate=$fdate&tdate=$tdate&strength=$strength&food=$food&noofveg=$noofveg&noofnonveg=$noofnonveg'; </script>";
}
else
{
	echo "<script>alert('The Hall is unavailable');</script>";
	echo "<script>window.location='cust-dashboard.php';</script>";
}


?>
