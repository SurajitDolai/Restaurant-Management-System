<?php require_once("config.php") ;
ini_set('display_errors',"1");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart Items</title>
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
<script type="text/javascript" src="js/check_out_validation.js"></script>
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
<body id="page4">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			<?php require("user_menu.php") ?>
<!-- / header -->
<!-- content -->
			
		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid" style="width:100%">
		<article id="content2">
        	<section>
				<div class="wrapper">
					<div class="col-full"><div class="wrap-col">
						<h2 style="text-align:center">CHECKOUT</h2>
					</div></div>
				</div>
			</section>
        	<section>
            	<div class="wrapper">
                <section>
				<div id="cart" style="padding-left:10px; padding-right:10px;"></div>
				</section>
                
                	
                </div>
            </section>
		</article>
<!-- / content -->
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
	
	search_cart()
});

function search_cart(){
	var info=55
	$.ajax({
        type: 'POST',
        url: 'search_cart.php',
        data: {info:info},
        success: function (response) {
            $("#show_cart").html(response);
        }
    });
}

function cart_items(){
	$.ajax({
        type: 'POST',
        url: 'cart_ajax_order.php',
        success: function (response) {
            $("#cart").html(response);
        }
    });
}
$(document).ready(function(e) {
    cart_items()
});

function remove_cart(ct){
	$.ajax({
        type: 'POST',
        url: 'remove_cart.php',
		data:{ct:ct},
        success: function (response) {
            alert(response);
			search_cart();
			cart_items()
			
        }
    });
}
function update_cart(qty){
	var arr=qty.split(",")

	$.ajax({
        type: 'POST',
        url: 'update_cart.php',
		data:{qty:arr[0],ct:arr[1]},
        success: function (response) {
			cart_items();
            alert(response);
        }
    });
}
</script>
<script>
function find_sub_area(area){
	//alert(area);
	var d=area
	$.ajax({
        type: 'POST',
        url: 'find_sub_area.php',
		data:{area_id:d},
        success: function (response) {
            $("#sub_id").html(response)
			//alert(response);
        }
    });
}
</script>
</body>
</html>