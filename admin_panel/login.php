<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Administration Login</div>
      <div class="card-body">
        <form name="log_form" method="post" action="login_code.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Email-ID</label>
            <input class="form-control" id="email_id" type="email" aria-describedby="emailHelp" placeholder="Enter email-id" name="email_id">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="pass" type="password" placeholder="Password" name="pass">
          </div>
          <div class="form-group">
            <input type="submit" name="log" value="Login" class="btn btn-primary btn-block">
            
          </div>
        </form>
        <?php
		if(isset($_GET['err'])){
			echo '<p style="color:red">'.$_GET['err'].'</p>';
		}
		?>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
