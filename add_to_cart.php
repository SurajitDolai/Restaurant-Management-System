<?php require_once("config.php"); ?>
<?php
$qty=$_POST['qty'];
if(empty($_SESSION['usr_info'])){
	echo "Please Login yourself";
}
else{
	//echo $qty;
	if($qty>=1){	
	$id=$_SESSION['usr_info']['id'];
	$item_id=$_POST['i_id'];
	$c_price=$_POST['price'];
	//$qty=$_POST['qty'];
	$dt=date("d-m-Y");
	$c_date=date("Y-m-d",strtotime($dt));
	$rs=mysqli_query($con, "SELECT `ct_id`,`item_id`,`qty` FROM `cart` WHERE `item_id`=$item_id AND `id`=".$id)or die(mysqli_error($con));
	if(mysqli_num_rows($rs)>0){
		$c_rec=mysqli_fetch_assoc($rs);
		$qty=$c_rec['qty']+$qty;
		$res=mysqli_query($con,"UPDATE `cart` SET `qty`='$qty' WHERE `ct_id`=".$c_rec['ct_id']." AND `id`=$id") or die(mysqli_error($con));
		if($res==1){
			echo "Item cart sucessfully";
		}else{
			echo "Sorry!! Item does not cart sucessfully";
		}
	}else{
		//echo "INSERT INTO `cart`(`item_id`,`id`,`qty`,`c_price`,`c_date`) VALUES ($item_id,$id,'$qty','$c_price','$c_date')";
		//exit;
		$res=mysqli_query($con,"INSERT INTO `cart`(`item_id`,`id`,`qty`,`c_price`,`c_date`) VALUES ($item_id,$id,'$qty','$c_price','$c_date')")or die(mysqli_error($con));
		if($res==1){
			echo "Item cart sucessfully";
		}else{
			echo "Sorry!! Item does not cart sucessfully";
		}
	}
	}else{
		echo "The quantity could not be empty or 0";
	}
}
?>
