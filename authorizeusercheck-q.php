<?php
session_start();
include "dbcon.php";
  $sql = "select * from login where username='$_POST[Username]' and password='$_POST[Password]'";
 $aa=$con->query($sql);
 $exist=mysqli_num_rows($aa);
 $data=mysqli_fetch_array($aa);
 
 // print_r(array_values($data));
 // return ;
 
if($exist>=1)
{
	
	if($data['usertype']=='customer')
	{
		header("location:cust-dashboard.php");
	}
	elseif($data['usertype']=='admin')
	{
		header("location:admin-dashboard.php");
	}
	$_SESSION["uid"]=$data["uid"];
}
else
	
	
{
	echo "<script>alert('You have entered invalid login credential');</script>";
    echo "<script>window.location='index.php';</script>";
} 

?>