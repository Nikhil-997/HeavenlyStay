<?php
include "dbcon.php";

  $sql = "select * from `room` WHERE roomid='$_GET[roomid]'";
 $aa=$con->query($sql);
$aabc=mysqli_fetch_array($aa);


echo json_encode($aabc);
?>
