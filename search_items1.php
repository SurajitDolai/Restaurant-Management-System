<?php
require_once("config.php");
$menu_id=$_POST['menu'];
$src="SELECT * FROM `item` WHERE `menu_id`=$menu_id";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	while($rec=mysqli_fetch_assoc($rs)){
		?>
        <div class="col-1-3"><div class="wrap-col mag-1">
        				<form id="cart<?php echo $rec['item_id'] ?>">
						<h3><?php echo $rec['name'] ?></h3>
                        <input type="hidden" name="i_id" id="i_id" value="<?php echo $rec['item_id'] ?>">
                        <input type="hidden" name="ses" id="ses" value="<?php if(isset($_SESSION['usr_info'])){ echo $_SESSION['usr_info']['id'];} else{ echo "none";}?>">
						<div class="wrapper pad_bot1">
							<figure class="pad_bot1"><img src="<?php echo $rec['f_path'] ?>" alt=""></figure>
							<h4>Price: <?php echo $rec['price'] ?><input type="hidden" name="price" value="<?php echo $rec['price']?>"></h4>
                            <h4>Quantity:&nbsp;&nbsp;<input type="text" name="qty" id="qty" size="2" value="1">&nbsp;&nbsp;<a href="javascript:void(0)" onClick="add_to_cart('#cart'+<?php echo $rec['item_id'] ?>)"><img src="images/Add.png"></a></h4>
                      </form>
                       
                       </div>
					</div></div>
		<?php
	}
}else{
	echo '<h3 style="text-align:center">No items found</h3>';
}
?>
          