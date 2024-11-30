<?php
require_once("config.php");
$menu_id=$_POST['menu'];
$src="SELECT * FROM `item` WHERE `menu_id`=$menu_id";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	while($rec=mysqli_fetch_assoc($rs)){
		?>
        <div class="col-1-3"><div class="wrap-col mag-1">
						<h3><?php echo $rec['name'] ?></h3>
						<div class="wrapper pad_bot1">
							<figure class="pad_bot1"><img src="<?php echo $rec['f_path'] ?>" alt=""></figure>
							<h4>Price: <?php echo $rec['price'] ?></h4>
						</div>
					</div></div>
		<?php
	}
}else{
	echo "No items found";
}
?>
          