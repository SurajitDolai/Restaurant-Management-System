<?php require_once("config.php") ;
//ini_set('display_errors',"1");?>

<?php
/*print_r($_POST);
exit;*/
if(empty($_SESSION['usr_info'])){
	header('location:login.php');
	exit;
}else{
	$dt=date("d-m-Y");
	$o_date=date("Y-m-d",strtotime($dt));
	for($i=0;$i<$_POST['no_item']; $i++){
		 
		$sql=mysqli_query($con,"INSERT INTO `orders` (`sub_id`, `contact_no`, `delivery_address`, `order_date`, `ct_id`, `id`) VALUES ('".$_POST['sub_id']."','".$_POST['contact_no']."', '".$_POST['delivery_address']."','$o_date','".$_POST['ct_'.$i]."','".$_SESSION['usr_info']['id']."')")or die(mysqli_error($con));
		if($sql==1){
			$upd=mysqli_query($con,"UPDATE `cart` SET `status`='1' WHERE `ct_id`=".$_POST['ct_'.$i])or die(mysqli_error($con));
		}
		
	}
	if($upd){
		echo "Your order has been submit sucessfully";
	}else{
		echo "Sorry for inconvenience";
	}
}
?>