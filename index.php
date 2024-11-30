<?php  require('config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<link rel="stylesheet" href="css/responsiveslides.css" /> 
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script src="js/responsiveslides.js"></script>
<script>
	$(function () {
	  $("#slidez").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		maxwidth: 960,
		namespace: "centered-btns"
	  });
	});
</script>
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
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->
			<?php require("user_menu.php") ?>
<!-- / header -->
<!-- content -->
				<article id="content">
					<div class="slider_bg">
						<div class="slider">
							<ul class="items">
								<li>
									<img src="images/img1.jpg" alt="">
									<div class="banner">
										<strong>Indian<span>Thinks</span></strong>
										<b>Quotes of the Day</b>
										<p>
											<span>"One cannot think well, love well, sleep well, if one has not dined well."</span>
										</p>
									</div>
								</li>
								<li>
									<img src="images/img2.jpg" alt="">
									<div class="banner">
										<strong>succulent<span>meat</span></strong>
										<b>Quotes of the Day</b>
										<p>
											<span>Good food and a warm kitchen are what makes a house a home.<br> I always tried to make my home like my mother's, because Mom was magnificent at stretching a buck when it came to decorating and food. Like a true Italian, she valued beautification in every area of her life, and I try to do the same.</span>
										</p>
									</div>
								</li>
								<li>
									<img src="images/img3.jpg" alt="">
									<div class="banner">
										<strong>Indian<span>Taste</span></strong>
										<b>Quotes of the Day</b>
										<p>
											<span>"You don't need a silver fork to eat good food."</span>
										</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="slider-response">
							<div class="rslides_container">
								<ul class="rslides" id="slidez">
									<li><img src="images/chicken tandoori.jpg" alt=""></li>
									<li><img src="../items pics/kadhai chicken.jpg" alt=""></li>
									<li><img src="../items pics/Chicken-Manchurian.jpg" alt=""></li>
								</ul>
							</div>
	                    </div>
					</div>
					<div class="wrap">
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Welcome <span>to Us!</span></h2>
									<figure><img src="images/page1_img1.jpg" alt="" ></figure>
									<p class="pad_bot1"><a href="https://customers.ai/blog/welcome-greeting-message#:~:text=Welcome%20to%20our%20company!,have%20you%20as%20our%20customer.." class="list_1"></a> Welcome to our Deliccio! We're so excited to have you as part of our team. where every dish is a delicious. We're glad you've chosen us, and we want to show our appreciation by giving you a special incentive.</p>
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>About <span>Us</span></h2>
									<figure><img src="images/page1_img2.jpg" alt="" ></figure>
									<p class="pad_bot1"><a href="https://149842033.v2.pressablecdn.com/wp-content/uploads/2018/11/restaurant-website-templates.jpg" class="list_1"></a> Daliccio is a restaurant on Haldia. We have awesome recipes and the most telented chefs in town.All our ingredients are sourced from local producers to ensure quality and freshness.</p>
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Our <span>Services</span></h2>
									<figure><img src="images/page1_img3.jpg" alt="" ></figure>
									<ul class="list1 pad_bot1">
										<li><a href="#">Delievery within 30 minutes.</a></li>
										<li><a href="#">Available 24×7.</a></li>
										<li><a href="#">We provide better services to customers.</a></li>
										<li><a href="#">We take customers feedback and try to improve services.</a></li>
									</ul>
								</div>
							</div>
						</div></section>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
			<?php require("footer.php") ?>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
$(document).ready(function($){
    var url = window.location.href;
	$('#menu li a[href="'+url+'"]').addClass('active');
    //$('#menu li a[href="'+url+'"]').addClass('active');
	//alert(url)
	
	search_cart(<?php echo $_SESSION['usr_info']['id'] ?>)
});

function search_cart(info){
	$.ajax({
        type: 'POST',
        url: 'search_cart.php',
        data: {info:info},
        success: function (response) {
            $("#show_cart").html(response);
        }
    });
}
</script>
</body>
</html>