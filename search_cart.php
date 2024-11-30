<?php require("config.php") ?>
<?php
$rs=mysqli_query($con,"SELECT * FROM `cart` WHERE `id`=".$_SESSION['usr_info']['id']." AND `status`='0'");
if(mysqli_num_rows($rs)>0){
	echo mysqli_num_rows($rs);
}else{
	echo 0;
}
?>