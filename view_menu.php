<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>View Menu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
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
						<h2 style="text-align:center">View Menu</h2>
					</div></div>
				</div>
			</section>
        	<section>
            	<div class="wrapper">
                
                <?php
					$rs=mysqli_query($con,"SELECT * FROM `menu`");
					if(mysqli_num_rows($rs)>0){
						$i=1;
						while($rec=mysqli_fetch_assoc($rs)){
							$m_id[$i]=$rec['menu_id'];
							?>
						<div class="col-1-6" style="float:left"><div class="wrap-col">
							<h4><a href="#" onClick="search_items(<?php echo $rec['menu_id'] ?>)"><?php echo $i.") ". $rec['menu_name']."(".$rec['category'].")" ?></h4></a>
                            </div></div>
                    <?php
							$i++;
						}
						
					}
					else{
						?>
						<div class="col-1-6"><div class="wrap-col">
						<h3>No Menu Found</h3
					></div></div>
                    <?php
					}
				?>
                	
                </div>
            </section>
			<section>
				<div id="items"></div>
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
function search_items(menu){
	//alert(item)
	$.ajax({
		type:"POST",
		url:"search_items.php",
		data:{menu:menu}
	}).done(function(resp){
		$("#items").html(resp)
	});
}
</script>
<script>
$(document).ready(function() {
    $.s_item=function(d){
		$.ajax({
		type:"POST",
		url:"search_items.php",
		data:{menu:d}
		}).done(function(resp){
			$("#items").html(resp)
		
		});
		}
	$.s_item(<?php echo $m_id[1] ?>)
});
</script>
<script>

/*$(document).ready(function($){
    var url = window.location.href;
	$('#menu li a[href="'+url+'"]').addClass('active');
    //$('#menu li a[href="'+url+'"]').addClass('active');
	//alert(url)
	
	//search_cart(<?php //echo $_SESSION['usr_info']['id'] ?>)
});*/

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