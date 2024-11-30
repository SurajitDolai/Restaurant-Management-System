<?php require('config.php');
	  require('check_session.php');
 ?>

<?php
$fname=$_FILES['ff']['name'];
$ftype=$_FILES['ff']['type'];
$fsize=$_FILES['ff']['size'];
$name=$_POST['name'];
$menu_id=$_POST['menu_id'];
$spicy=$_POST['spicy'];
$price=$_POST['price'];
/*print_r($_FILES['ff']);
exit;*/
$temp_loc=$_FILES['ff']['tmp_name'];
$fpath="item_image/".rand(00000000,99999999).$fname;
$type_arr=array("jpg","JPG","JPEG","jpeg","png","PNG");
$type=explode(".",$fname);
$ext=end($type);
if(empty($_FILES['ff']['name'])){
	$upd="UPDATE `item` SET `name`='$name',`price`='$price',`spicy`='$spicy',`menu_id`='$menu_id' WHERE `menu_id`='$menu_id' ";
			$res=mysqli_query($con,$upd) or die( mysqli_error($con));
			#echo $res;
			if($res==1){
				//echo "File uploaded successfully";
				header('location:view_items.php?msg=Item update successfull');
				exit;
			}else{
				//echo "File not upload";
				header('location:view_items.php?msg=Item not update successfull');
				exit;
			}
}
elseif(in_array($ext,$type_arr)){
	if($fsize<=1024*1024*1.5 && $_FILES['ff']['error']==0){
		if(move_uploaded_file($temp_loc,"../".$fpath)){
			$upd="UPDATE `item` SET `name`='$name',`price`='$price',`spicy`='$spicy',`menu_id`='$menu_id',`f_path`='$fpath' WHERE `menu_id`='$menu_id' ";
			$res=mysqli_query($con,$upd) or die( mysqli_error($con));
				#echo $res;
				if($res==1){
					//echo "File uploaded successfully";
					header('location:view_items.php?msg=Item update successfull');
					exit;
				}else{
					//echo "File not upload";
					header('location:view_items.php?msg=Item update not successfull');
					exit;
				}
		}else{
			//echo "File not upload";
			header('location:view_items.php?msg=Please try again');
			exit;
		}
	}
	else{
		header('location:view_items.php?msg=The image not more than 1.5MB');
		exit;
	}
}else{
	header('location:view_items.php?msg=Please select jpg or jpeg or png image file');
	exit;
}
?>