<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Registration</title>
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
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/reg_validation.js"></script>
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
							<h2 class="letter_spacing">Customer <span>Registration</span></h2>
							
							<div id="contact_form">	
								<strong>Please Register yourself</strong>
								<form name="reg" id="reg" method="post" action="registration_action.php">					 
                                <label>
									 First Name*: &nbsp; &nbsp; &nbsp;<span id="invalid-f_name"></span>
									 <input type="text" placeholder="Please enter your first name" name="f_name" id="f_name">
									 </label>
                                     <label>
									 Last Name*: &nbsp; &nbsp; &nbsp;<span id="invalid-l_name"></span>
									 <input type="text" placeholder="Please enter your last name" name="l_name" id="l_name">
									 </label>
									 <label>
									 Email*:	&nbsp; &nbsp; &nbsp;<span id="e_error"></span><span id="invalid-email_id"></span>
									 <input type="email" placeholder="youremail@gmail.com" name="email_id" id="email_id" onBlur="check_email(this.value)">
									 </label>
										
									 <label>
									 Password*: &nbsp; &nbsp; &nbsp;<span id="invalid-password"></span>
									 <input type="password" placeholder="Please enter your password" name="password" id="password">
									 </label>
                                     <label>
									 Contact Number *: &nbsp; &nbsp; &nbsp;<span id="invalid-contact_no"></span>
									 <input type="text" placeholder="Please enter your contact number" name="contact_no" id="contact_no">
									 </label>
                                     <label>
									 Address *: &nbsp; &nbsp; &nbsp;<span id="invalid-address"></span>
									 <input type="text" placeholder="Please enter your address" name="address" id="address">
									 </label>
								 
									 <input class="sendButton" type="submit" name="Submit" value="Register">
									 
								</form>
                                <label>
									 <?php
									 if(isset($_GET['msg'])){
										 echo $_GET['msg'];
									 }
									 ?>
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
<script type="text/javascript">

function check_email(str) {
	
    $.ajax({
        type: 'POST',
        url: 'search_email.php',
        data: {email_id:str},
        success: function (response) {
			$("#e_error").html(response)
        }
    });
} 
</script>
</body>
</html>