<?php require_once("config.php") ;
$email_id=$_POST['email_id'];
$rs=mysqli_query($con,"SELECT `email_id` FROM `customer` WHERE `email_id`='$email_id'");
	if(mysqli_num_rows($rs)>0){
		echo "You are already registered";
		exit;
	}
