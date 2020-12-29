<?php
include "dbcon.php";
$branch=$_POST[branchname];
$sql1="select * from branch where branchname='$branch' and status='active'";
$query=$con->query($sql1);
$count = $query->num_rows;
if($count >= 1)
{
	echo "<script> alert('branch exists'); </script>";
	//header("location:admin-dashboard.php");
}
else
{
  $sql ="INSERT INTO `branch`(`branchid`,`branchname`,`status`)VALUES('','$_POST[branchname]','active')";
 $aa=$con->query($sql);
	echo "<script> alert('branch record inserted successfully..	'); </script>";
}

 //header("location:admin-dashboard.php");
 echo "<script>window.location='admin-dashboard.php';</script>";
?>

