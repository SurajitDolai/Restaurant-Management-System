<?php require_once("config.php") ;
//ini_set('display_errors',"1");?>

<?php

$c_name=$_POST['f_name']." ".$_POST['l_name'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$contact_no=$_POST['contact_no'];
$address=$_POST['address'];
if(!$c_name=="" && !$email_id=="" && !$password=="" && !$contact_no=="" && !$address==""){
	$rs=mysqli_query($con,"SELECT `email_id` FROM `customer` WHERE `email_id`='$email_id'");
	if(mysqli_num_rows($rs)>0){
		header('location:registration.php?msg=You are already registered');
		exit;
	}
	else{
	}
	$res=mysqli_query($con,"INSERT INTO `customer`(`c_name`,`email_id`,`password`,`contact_no`,`address`) VALUES ('$c_name','$email_id','$password','$contact_no','$address')")or die(mysqli_error($con));
	if($res==1){
		header('location:login.php?msg=Regostration sucessfull and login now');
		exit;
	}else{
		header('location:registration.php?msg=Please try again!!.. Registration unsucessfull');
		exit;
	}
}else{
	header('location:registration.php?msg=Please enter all the details');
	exit;
}
?>