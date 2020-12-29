<?php
session_start();

//$custid=$_SESSION["uid"];
include "dbcon.php";
  $sql = "INSERT INTO `swimming`(`spid`,`ftime`,`ttime`,`customerid`,`status`) VALUES ('','$_POST[ftime]','$_POST[ttime]','$_SESSION[uid]','active')";
 $aa=$con->query($sql);
 header("location:cust-dashboard.php");
 ?>