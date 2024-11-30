<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administration Panel</title>
  
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="https://pro-staging.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require('admin_menu.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">View Menu</li>
      </ol>
      <div class="row">
        <div class="col-12">
         <a href="add_menu_type.php" class="btn btn-info">Add New Menu</a>
         <?php
		 if(isset($_GET['msg'])){
			 echo '&nbsp;&nbsp;&nbsp;'.$_GET['msg'];
		 }
		 ?>
           <?php
		  $src="SELECT * FROM `menu` ORDER BY `menu_id` DESC";
		  $rs=mysqli_query($con,$src)or die(mysqli_error($con));
		  if(mysqli_num_rows($rs)>0){
			  ?>
              <table class="table table-bordered table-striped">
              <thead>
              	<tr>
                	<th>Sr. No.</th>
                    <th>Name of the Menu</th>
                    <th>Category</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              	<?php
				$sl=1;
				while($row=mysqli_fetch_assoc($rs)){
					?>
                    <tr>
                    <td><?php echo $sl ?></td>
                    <td><?php echo $row['menu_name']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td align="center"><a href="update_menu_type.php?menu_id=<?php echo base64_encode($row['menu_id']) ?>"><img src="images/edit.png"></a></td>
            <td align="center"><a href="delete_menu_type.php?menu_id=<?php echo $row['menu_id'] ?>"><img src="images/delete.png"></a></td>

                    
                    </tr>
					<?php
					$sl++;
				}
				?>
              </tbody>
              </table>
			  <?php
		  }else{
			  echo "<br>No Menu Found";
		  }
		  ?>

        
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Deliccio 2023</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
