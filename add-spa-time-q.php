<?php
session_start();

include "dbcon.php";
  $sql = "INSERT INTO `spa`(`spaid`,`customerid`,`status`) VALUES ('','$_SESSION[uid]','active')";
 $aa=$con->query($sql);
 header("location:cust-dashboard.php");
 ?>