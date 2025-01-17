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
        <li class="breadcrumb-item active">Add New Menu</li>
      </ol>
      <div class="row">
        <div class="col-12">
        <a href="view_menu_type.php" class="btn btn-info">BACK</a>
          <h1>Add New Menu</h1>
          <form name="menu_type" id="menu_type" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Name of the Menu</label>
                <input class="form-control" id="menu_name" type="text" aria-describedby="Item name" name="menu_name" placeholder="Enter Menu name">
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="category">Select Category</label>
                <select name="category" class="form-control">
                	<option selected value="">-Select-</option>
                    <option value="Veg">Veg</option>
                    <option value="Non-veg">Non-veg</option>
                </select>
              </div>
              
            </div>
          </div>
          
           <div class="form-group">
              <input type="submit" name="ok" value="Add Menu" class="btn btn-primary">
              </div>
               <?php
		  if (isset($_POST['ok'])){
			  $menu_name=$_POST['menu_name'];
			  $category=$_POST['category'];
			  
			  $sql=" INSERT INTO `menu`(`menu_name`,`category`)VALUES('$menu_name','$category')";
			  $res=mysqli_query($con,$sql) or die( mysqli_error($con));
	#echo $res;
	if($res==1){
		//echo "Employee save successfully";
		//header('location:view_area.php?msg=Inserted sucessfully');
		?>
        <script>
		window.location='view_menu_type.php?msg=Menu added sucessfully'
        </script>
		<?php
	}else{
		echo"Menu not saved successfully";
	}

		  }
		  ?>
        
        </form>
          
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
