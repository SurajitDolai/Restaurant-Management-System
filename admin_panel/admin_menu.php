<?php require('config.php');
	  require('check_session.php');
 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <!--<i class="fa fa-fw fa-dashboard"></i>-->
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Items">
          <a class="nav-link" href="view_items.php">
            <!--<i class="fa fa-fw fa-area-chart"></i>-->
            <i class="far fa-utensils"></i>
            <span class="nav-link-text">Items</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Order">
          <a class="nav-link" href="order.php">
            <!--<i class="fa fa-fw fa-area-chart"></i>-->
            <i class="fab fa-first-order"></i>
            <span class="nav-link-text">Order</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Items Type">
          <a class="nav-link" href="view_menu_type.php">
            <!--<i class="fa fa-fw fa-area-chart"></i>-->
            <i class="fab fa-first-order"></i>
            <span class="nav-link-text">Menu Type</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Area">
          <a class="nav-link" href="view_area.php">
            <!--<i class="fa fa-fw fa-area-chart"></i>-->
            <i class="fab fa-first-order"></i>
            <span class="nav-link-text">Area</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sub-Area">
          <a class="nav-link" href="view_sub_area.php">
            <!--<i class="fa fa-fw fa-area-chart"></i>-->
            <i class="fab fa-first-order"></i>
            <span class="nav-link-text">Sub-Area</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">      
        <li class="nav-item">
          <a class="nav-link" href="log_out.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>