<?php
include "dbcon.php";
  $sql = "INSERT INTO `feedback`(`id`,`feedback`,`status`) VALUES ('','$_POST[feedback]','active')";
 $aa=$con->query($sql);
 header("location:cust-dashboard.php");
?>