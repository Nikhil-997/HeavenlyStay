<?php
session_start();

include "dbcon.php";
  $sql = "INSERT INTO `service`(`serviceid`,`halltype`,`fdate`,`tdate`,`price`,`hallstatus`,`status`) 
  VALUES 
  ('','$_POST[halltype]','$_POST[fdate]','$_POST[tdate]','$_POST[price]','available','active')";
 $aa=$con->query($sql);
 echo "<script> alert('Hall record inserted successfully..	'); </script>";
echo "<script>window.location='admin-dashboard.php';</script>";
?>
