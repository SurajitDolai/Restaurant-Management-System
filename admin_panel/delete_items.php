<?php require('config.php');
	  require('check_session.php');
 ?>

  <?php
$id=$_GET['item_id'];
$del="DELETE FROM `item` WHERE `item_id`=$id";
$res=mysqli_query($con,$del)or die(mysqli_error($con));
if($res==1){?>
<script>
		window.location='view_items.php?msg=item deleted'
        </script>
		
    <?php
}else{?>
	
   <script>
		window.location='view_items.php?msg=item not deleted'
        </script>
		<?php
	exit;
}
?>
