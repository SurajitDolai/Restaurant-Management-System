<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<link rel="stylesheet" href="css/contactform.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page5">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
		<?php require("user_menu.php"); ?>	
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Customer <span>Login</span></h2>
							
							<div id="contact_form">	
								<strong>Please login yourself</strong>
								<form name="form1" id="ff" method="post" action="login_action.php">					 
									 <label>
									 Email*:
									 <input type="email" placeholder="youremail@gmail.com" name="email_id" id="email_id" required>
									 </label>
										
									 <label>
									 Password*:
									 <input type="password" placeholder="Please enter your password" name="password" id="password" required>
									 </label>
								 
									 <input class="sendButton" type="submit" name="Submit" value="Login">
									 
								</form>
                                <?php
									 if(isset($_GET['msg'])){
										 echo $_GET['msg'];
									 }
									 ?>
									 </label><br>
                                <label>
									 New User?
									 <a href="registration.php">Click Here for Registration</a>
									 </label>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
			<?php require("footer.php"); ?>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>