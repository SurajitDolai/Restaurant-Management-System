<?php require_once("config.php") ;

//print_r($_POST);
$a_id=$_POST['area_id'];
//exit;
$rs=mysqli_query($con,"SELECT * FROM `sub_area` WHERE `area_id`=".$a_id." ORDER BY `sub_name`") or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	while($rec=mysqli_fetch_assoc($rs)){
	?>
    <option value="<?php echo $rec['sub_id'] ?>"><?php echo strtoupper($rec['sub_name'] );?></option>
	<?php
	}
}else{
	?>
	<option value="">Please select area</option>
    <?php
}
?>