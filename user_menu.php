<?php
if(empty($_SESSION['usr_info'])){
?>
<header>
    <h1><a href="index.php" id="logo"><img src="images/logo.png"/></a></h1>
    <nav>
        <ul id="top_nav">
            <li><a href="login.php"><img src="images/login.png" alt="login" width="31" height="31"></a></li>
            <li class="end"><a href="cart.php"><img src="images/icon_cart.png" alt="Cart"></a></li>
        </ul>
    </nav>
    <nav>
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="view_menu.php">View Menu</a></li> -->
            <li><a href="place_order.php">Menu</a></li>
            <li><a href="contactus.php">Contacts</a></li>
        </ul>
    </nav>
</header>
<?php
}
else{
	?>
	<header>
    <h1><a href="index.php" id="logo"><img src="images/logo.png"/></a></h1>
    <nav>
        <ul id="top_nav">
            <li><a href="#" style="color:#FFF; padding-top:15px;"><?php echo "Hi ".$_SESSION['usr_info']['c_name'] ?></a></li>
            <li><a href="logout.php"><img src="images/logout.png" alt="logout" width="31" height="31"></a></li>
            <li class="end"><a href="cart.php"><img src="images/icon_cart.png" alt="Cart"><p style="color:#FFF; float:right; padding-top:15px;" id="show_cart">(0)</p></a></li>
        </ul>
    </nav>
    <nav>
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="view_menu.php">View Menu</a></li> -->
            <li><a href="place_order.php">Menu</a></li>
            <li><a href="contactus.php">Contacts</a></li>
        </ul>
    </nav>
</header>
<script>
$(document).ready(function() {
    search_cart(<?php echo $_SESSION['usr_info']['id'] ?>);
});
</script>
<?php
}
?>