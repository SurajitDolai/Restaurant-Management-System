<?php require("config.php");  ?>
<?php
$email_id=$_POST['email_id'];
$pass=$_POST['pass'];
$src="SELECT * FROM `admin` WHERE `email_id`='".$email_id."' AND `pass`='".$pass."'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['a_info']=$rec;
	header('location:index.php');
	exit;
}else{
	header('location:login.php?err=Invalid email or password');
	exit;
}
?>