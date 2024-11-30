<?php require_once("config.php") ;
ini_set('display_errors',"1");?>
<?php
$ct_id=$_POST['ct'];
$qty=$_POST['qty'];
if($qty >= 1){
$upd=mysqli_query($con,"UPDATE `cart` SET `qty`='$qty' WHERE `ct_id`=$ct_id AND `id`=".$_SESSION['usr_info']['id'])or die(mysqli_error($con));
if($upd==1){
	echo "Cart update sucessfully";
}else{
	echo "Sorry try again";
}
}else{
	echo "The quantity can not be empty or 0";
}

?>