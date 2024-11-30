<?php //require('config.php');
	  //require('check_session.php');
 ?>
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
        <li class="breadcrumb-item active">Order</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>All Order</h1>
          <?php
		  $src="SELECT o.*, cu.c_name, ct.*,i.name, i.price, a.*, sb.* FROM orders o INNER JOIN customer cu ON o.id=cu.id INNER JOIN cart ct ON o.ct_id=ct.ct_id INNER JOIN item i ON ct.item_id=i.item_id INNER JOIN sub_area sb ON o.sub_id=sb.sub_id INNER JOIN area a ON sb.area_id=a.area_id ORDER BY o.order_date DESC";
		  //$rs=mysqli_query($con,$src);
		  $rs=mysqli_query($con,$src) or die(mysqli_error($con));
		  if(mysqli_num_rows($rs)>0){
			  ?>
              <table class="table table-bordered">
              <thead>
              	<th>Date</th>
              	<th>Item Details</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Sub-Total</th>
                <th>GST</th>
                <th>Grand Total</th>
                <th>Delivered To</th>
              </thead>
              <tbody>
              <?php
			  while($rec=mysqli_fetch_assoc($rs)){
				  //print_r($rec);
				  ?>
                  <tr>
                  	<td><?php echo date("d-M-Y", strtotime($rec['order_date'])) ?></td>
                  	<td><?php echo $rec['name'] ?></td>
                    <td><?php echo $rec['qty'] ?></td>
                    <td><?php echo $rec['price'] ?></td>
                    <td><?php echo $rec['qty']*$rec['price'] ?></td>
                    <td><?php echo ($rec['qty']*$rec['price'])*0.18 ?></td>
                    <td><?php echo round((($rec['qty']*$rec['price'])*0.18)+($rec['qty']*$rec['price'])) ?></td>
                    <td><?php echo $rec['c_name'].", Contact No:-".$rec['contact_no'],"<br>", "Add:- ".$rec['delivery_address'].", ".$rec['sub_name'].", ".$rec['area_name'] ?></td>
                  </tr>
				  <?php
			  }
			  ?>
              </tbody>
              </table>
			  <?php
		  }else{
			  echo "No Order found";
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
          <small></small>
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
