<?php
session_start();
include "dbcon.php";
$halltype=$_POST['halltype'];
$price=$_POST['price'];
$eid=$_POST['eid'];
echo $halltype;
echo $price;
echo $eid;
?>