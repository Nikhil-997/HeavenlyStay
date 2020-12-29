<?php
include "dbcon.php";

  $sql = "select * from `service` WHERE id='$_GET[serviceid]'";
 $aa=$con->query($sql);
$aabc=mysqli_fetch_array($aa);


echo json_encode($aabc);
?>
