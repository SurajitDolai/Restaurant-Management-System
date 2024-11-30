<?php require('config.php');
	  require('check_session.php');
 ?>

  <?php
$id=$_GET['menu_id'];
$del="DELETE FROM `menu` WHERE `menu_id`=$id";
$res=mysqli_query($con,$del)or die(mysqli_error($con));
if($res==1){?>
<script>
		window.location='view_menu_type.php?msg=Menu deleted'
        </script>
		
    <?php
}else{?>
	
   <script>
		window.location='view_menu_type.php?msg=Menu not deleted'
        </script>
		<?php
	exit;
}
?>
