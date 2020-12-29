<?php
include "dbcon.php";

  $sql = "INSERT INTO `login`(`uid`, `name`, `address`, `gender`, `dob`, `phoneno`, `emailid`, `username`, `password`, `status`, `usertype`) VALUES ('','$_POST[Name]','$_POST[Address]','$_POST[Gender]','$_POST[DOB]','$_POST[Phoneno]','$_POST[emailid]','$_POST[Username]','$_POST[Password]','active', 'customer')";
 $aa=$con->query($sql);
 
if($aa==true)
{
	header("location:index.php");
}
else
{
	echo "invalid response";
} 

?>

