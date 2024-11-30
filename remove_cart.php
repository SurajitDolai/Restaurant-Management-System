<?php require_once("config.php") ;
ini_set('display_errors',"1");?>
<?php
$ct_id=$_POST['ct'];
$del=mysqli_query($con,"DELETE FROM `cart` WHERE `ct_id`=$ct_id AND `id`=".$_SESSION['usr_info']['id'])or die(mysqli_error($con));
if($del==1){
	echo "Removed cart item";
}else{
	echo "Sorry try again";
}

?>