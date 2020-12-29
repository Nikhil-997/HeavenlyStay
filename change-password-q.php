<?php
session_start();
include "dbcon.php";
$username = $_POST['username'];
//$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];
$sql = "select * from login where username='$_POST[Username]' and status='active'";
 $aa=$con->query($sql);
 $exist=mysqli_num_rows($aa);
 $data=mysqli_fetch_array($aa);
 
 if($newpassword!==$confirmnewpassword)
 {
	 
	  echo "<script>alert('The entered new passwords do not match')</script>";
	 echo "<script> window.location.assign('change-password.php')</script>";
	
 }
 else
 {
	 $select_query = "SELECT uid FROM login";
        $run_select_query = mysqli_query($con,$select_query); 
        while ($row_post=mysqli_fetch_array($run_select_query))
		{

             $user_id = $row_post['uid']; 

             //echo $user_id;

        }
		$update_posts = "UPDATE login SET  password='$newpassword' where username='$username'";  
        $run_update = mysqli_query($con,$update_posts); 
        echo "<script>alert('The Password Has been Updated!')</script>";
		echo "<script> window.location.assign('login1.php')</script>";
		 
 
}
 

      ?>