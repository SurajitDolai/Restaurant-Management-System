<?php require("config.php");?>
<?php

$email_id=$_POST['email_id'];
$password=$_POST['password'];
$rs=mysqli_query($con,"SELECT * FROM `customer` WHERE `email_id`='$email_id' AND `password`='$password'")or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['usr_info']=$rec;
	header('location:place_order.php');
	exit;
}else{
	/*header('location:login.php?msg=Invalid email or password');
	exit;*/
}
?>