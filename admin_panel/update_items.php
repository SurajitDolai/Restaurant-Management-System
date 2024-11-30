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
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Modify Items</li>
      </ol>
      <div class="row">
        <div class="col-12">
        <a href="view_items.php" class="btn btn-info">BACK</a>
          <h1>Update Item</h1>
            <?php
$id=$_GET['item_id'];
$src="SELECT i.*, m.* FROM `item` i INNER JOIN `menu` m ON i.menu_id=m.menu_id WHERE `item_id`=$id";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
$rec=mysqli_fetch_assoc($rs);
// print_r($rec);
?>
          <form name="area" id="item" method="post" action="update_items_code.php" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="name">Item name</label>
                <input value="<?php echo $rec['name'] ?>" class="form-control" id="name" type="text" aria-describedby="Item name" name="name" placeholder="Enter Item name">
              </div>
              <div class="col-md-6">
                <label for="spicy">Spicy</label>
                <input value="<?php echo $rec['spicy'] ?>" class="form-control" id="spicy" type="text" aria-describedby="Spicy" name="spicy" placeholder="Spicy">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input value="<?php echo $rec['price'] ?>" class="form-control" id="price" type="text" aria-describedby="Price" name="price" placeholder="Price">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
            <label for="menu_image">Select Menu Image</label>
                <input class="form-control" id="ff" type="file" name="ff"placeholder="menu_image">
               <img src="../<?php echo $rec['f_path'] ?>" width="100">
              </div>
              <div class="col-md-6">
              <?php
			  $menu_src="SELECT * FROM `menu`";
			  $menu_rs=mysqli_query($con,$menu_src)or die(mysqli_error($con));
			  //echo var_dump($menu_rs);
			  ?>
                <label for="type">Selct Menu Type</label>
                <select name="menu_id" class="form-control">
                <option value="<?php echo $rec['menu_id'] ?>" selected><?php echo $rec['menu_name'].'['.$rec['category'].']' ?></option>
                <?php
				
					while($menu_rec=mysqli_fetch_assoc($menu_rs)){
						echo '<option value="'.$menu_rec['menu_id'].'">'.$menu_rec['menu_name'].'['.$menu_rec['category'].']</option>';
					}
				?>
                </select>
              </div>
            </div>
          </div>
           <div class="form-group">
              <input type="submit" name="ok" value="Update Item" class="btn btn-primary">
              </div>        
        </form>
          
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    </body>

</html>
