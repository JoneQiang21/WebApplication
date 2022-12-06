<!DOCTYPE HTML>
<html>
<head>
<title>Single</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include_once("connproduct.php");
	$thisurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
	$id=explode("id=",$thisurl)[1];

	$sql = "SELECT * FROM products WHERE (id ='".$id."')";
	$result = $conn->query($sql);
		while($row = mysqli_fetch_assoc($result)) {
		$product_name=$row["product_name"];
		$file_name=$row["file_name"];
		$price=$row["price"];
		$size=explode("/",$row["size"]);
		  }
	$conn->close();
?>
	
	
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/etalage.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>


<!-- start menu -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>

<script type="text/javascript">
function get(id){return document.getElementById(id);}
function checkorder(){
	<?php if($_GET["del"]=="cookies"){setcookie("username", "", time()-3600);} 
	?>
	size=get("size").value;
	if (<?php if(isset($_COOKIE['username'])==1){echo "false";}else{echo "true";} ?>)
	{window.location.href="login.html";}
	else if(size=='0'){alert("Please choose your size");}
	else{document.getElementById("form").submit();}
	}
	
</script>


<body>
<div class="header_top ">
		<ul>
			<a href="login.html"><i style="position:fixed;right:2vw;z-index:3" class="material-icons w3-xxlarge">person</i></a>
		</ul>

<!-- navigation -->
	<div class="header_bottom men_border w3-pagepadding" style="background-color: #f7f7f7">
		<div class="container">
			<div class="header-bottom-left w3-row">
				<div class="logo w3-col l3 m3 s3">
					<h1><a href="index.html"><span>Buy</span>shop</a></h1>
				</div>
				<div class="w3-col l6 m6 s5" style="margin: auto">
		    	  	<ul class="megamenu skyblue">
					<li class="active grid"><a class="color1" href="item.php?sex=1&">Men</a>
					<div class="megapanel">
						<div class="row">
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="item.php?sex=1&cat=accessory&">Accessories</a></li>
										<li><a href="item.php?sex=1&cat=bag&">Bags</a></li>
										<li><a href="item.php?sex=1&cat=hat&">Caps & Hats</a></li>
										<li><a href="item.php?sex=1&cat=hoodie&">Hoodies & Sweatshirts</a></li>
										<li><a href="item.php?sex=1&cat=jacket&">Jackets & Coats</a></li>
										<li><a href="item.php?sex=1&cat=jeans&">Jeans</a></li>
										<li><a href="item.php?sex=1&cat=loungewear&">Loungewear</a></li>
										<li><a href="item.php?sex=1&cat=shirt&">Shirts</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col3">
								<div class="h_nav">
									<ul>
									
										<li><a href="item.php?sex=1&cat=shoes&">Shoes, Boots & Trainers</a></li>
										<li><a href="item.php?sex=1&cat=shorts&">Shorts</a></li>
										<li><a href="item.php?sex=1&cat=suit&">Suits & Blazers</a></li>
										<li><a href="item.php?sex=1&cat=sunglasses&">Sunglasses</a></li>
										<li><a href="item.php?sex=1&cat=swimwear&">Swimwear</a></li>
										<li><a href="item.php?sex=1&cat=trousers&">Trousers & Chinos</a></li>
										<li><a href="item.php?sex=1&cat=tshirt&">T-Shirts</a></li>
										<li><a href="item.php?sex=1&cat=underwear&">Underwear & Socks</a></li>
									</ul>	
								</div>							
							</div>
						</div>
					</div>
					</li>
				   	<li class="active action grid"><a class="color2" href="item.php?sex=0&">Women</a>
					<div class="megapanel">
						<div class="row">
							<div class="col3">
								<div class="h_nav">
									<ul>
												<li><a href="item.php?sex=0&cat=accessory&">Accessories</a></li>
												<li><a href="item.php?sex=0&cat=bag&">Bags</a></li>
												<li><a href="item.php?sex=0&cat=hat&">Caps & Hats</a></li>
												<li><a href="item.php?sex=0&cat=dress&">Dresses</a></li>
												<li><a href="item.php?sex=0&cat=hoodie&">Hoodies & Sweatshirts</a></li>
												<li><a href="item.php?sex=0&cat=jacket&">Jackets & Coats</a></li>
												<li><a href="item.php?sex=0&cat=jeans&">Jeans</a></li>
												<li><a href="item.php?sex=0&cat=loungewear&">Loungewear</a></li>
												<li><a href="item.php?sex=0&cat=shirt&">Shirts</a></li>
											</ul>	
										</div>							
									</div>
									<div class="col3">
										<div class="h_nav">
											<ul>
											
												<li><a href="item.php?sex=0&cat=shoes&">Shoes, Heels & Trainers</a></li>
												<li><a href="item.php?sex=0&cat=skirt&">Skirts</a></li>
												<li><a href="item.php?sex=0&cat=suit&">Suits & Blazers</a></li>
												<li><a href="item.php?sex=0&cat=sunglasses&">Sunglasses</a></li>
												<li><a href="item.php?sex=0&cat=swimwear&">Swimwear</a></li>
												<li><a href="item.php?sex=0&cat=trousers&">Trousers & Chinos</a></li>
												<li><a href="item.php?sex=0&cat=tshirt&">T-Shirts</a></li>
												<li><a href="item.php?sex=0&cat=underwear&">Underwear & Socks</a></li>
									</ul>	
								</div>							
							</div>
						</div>
					</div>
					<li><a class="color4" href="about.html">About</a></li>				
					<li><a class="color5" href="404.html">Blog</a></li>
					<li><a class="color6" href="contact.html">Support</a></li>
					</ul> 
				</div>

<!-- shopping cart and search -->
				<div class="w3-col l3 m3 s4">
					<ul class="icon1">
						<a class="active-icon c1" href="cart.php"> </a>
					</ul>
					<div class="search">
					<form action='item.php' method='post'>
						<input type="text" name="search" class="textbox" value=<?php if($_SESSION['search']){echo $_SESSION['search'];}else{echo '""';}?> placeholder='Search'   />
						<input type="submit" value="Subscribe" id="submit" name="submit"/>
					</form>
					</div>
				</div>
			</div>
 		</div>
	</div>
</div>
	
<div class="w3-pagepaddingabout w3-margin-top" >
		<div class="w3-row single">
			<div class="w3-col l4 m4 s3">
				<div class="images_3_of_2">
					<ul id="etalage">
						<li>
								<img class="etalage_thumb_image" <?php echo "src='images/".$file_name."'" ?> />
								<img class="etalage_source_image" <?php echo "src='images/".$file_name."'" ?> title="" />
						</li>
						<?php
						$thumb_name=explode('.',$file_name)[0];
						$thumb_format=explode('.',$file_name)[1];
						for ($a=1;$a>0;$a++){
							$thumb_file='images/'.$thumb_name.'.'.$a.'.'.$thumb_format;
							if(file_exists($thumb_file)){
							echo "
							<li>
							<img class='etalage_thumb_image'  src=".$thumb_file." />
							<img class=' etalage_source_image' src=".$thumb_file."  title='' />
							</li>
						";}else{break;}}
						?>
					</ul>	
				</div>
			</div>
			<div class="desc1 span_3_of_2 w3-col l7 m5 w3-right">
			<ul class="back">
				<li><i class="back_arrow"> </i>Back to <a href="index.html"> Men Clothing </a></li>
			</ul>
			<h1><?php echo $product_name;?></h1>
			<ul class="price_single w3-row">
				<li class="head"><h2>$<?php echo $price;?></h2></li>
				<li class="head_desc"><a href="#">12 reviews</a><img src="images/review.png" alt=""/></li>
			</ul>
			<br>
			<p style="display:block">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>
			<div class="dropdown_top">
			<form id="form" action=<?php echo "'addtocart.php?id=".$id."'" ?> method="post" onsubmit="return check;">
				<div class="dropdown_left">
					<select id="size" name="size" class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
						<option value="0">Select size</option>	
						<?php foreach ($size as $value) {if($value!=null){echo "<option value='".$value."'>".$value."</option>";$i++;}} ?>

					</select>
				</div>
				<ul class="color_list">
					<li><a href="#"> <span class="color1"> </span></a></li>
					<li><a href="#"> <span class="color2"> </span></a></li>
					<li><a href="#"> <span class="color3"> </span></a></li>
					<li><a href="#"> <span class="color4"> </span></a></li>
					<li><a href="#"> <span class="color5"> </span></a></li>
				</ul>
			</div>
			<br>
			<input type="button" class="btn1 btn2 btn-primary1" value="Add To Cart" onclick="checkorder();"/>
			</form>
		</div>
	</div>
			
	<!-- socila icons -->
	<div class="single_social_top w3-center">   
          	  <ul class="single_social w3-cell-row">
				  <li class="w3-cell"><a href="https://www.facebook.com/"> <i class="s_fb"> </i> <div class="social_desc w3-left-align">Share<br> on facebook</div><div class="clearfix"> </div></a></li>
				  <li class="w3-cell"><a href="https://twitter.com/"> <i class="s_twt"> </i> <div class="social_desc w3-left-align">Tweet<br> this product</div><div class="clearfix"> </div></a></li>
				  <li class="w3-cell"><a href="https://www.google.com/"> <i class="s_google"> </i><div class="social_desc w3-left-align">Google+<br> this product</div><div class="clearfix"> </div></a></li>
				  <li class="w3-cell last"><a href="#"> <i class="s_email"> </i><div class="social_desc w3-left-align">Email<br> a Friend</div><div class="clearfix"> </div></a></li>
			  </ul>
	</div>

	<!-- introduction-->
	<ul class="menu_drop">
		<li class="item1"><a href="#"><img src="images/product_arrow.png">Description</a>
			<ul class="single">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
				<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
			</ul>
		</li>
		<li class="item2"><a href="#"><img src="images/product_arrow.png">Additional information</a>
			<ul class="single">
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
				<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
			</ul>
		</li>
		<li class="item3"><a href="#"><img src="images/product_arrow.png">Reviews (10)</a>
			<ul class="single">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
				<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
			</ul>
		</li>
		<li class="item4"><a href="#"><img src="images/product_arrow.png">Helpful Links</a>
			<ul class="single">
				<p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
				<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
			</ul>
		</li>
		<li class="item5"><a href="#"><img src="images/product_arrow.png">Make A Gift</a>
			<ul class="single">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </p>
				<p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
				<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
			</ul>
		</li>
	 </ul>

	<!-- related-->
	<h3 class="m_2">Related Products</h3>
		<div class="container">
	        <div class="box_3 w3-row">
				<div class="col-md-3 w3-quarter">
	            	<div class="content_box">
						<a href="single.html"><img src="images/pic6.jpg" class="img-responsive" alt=""></a>
	   				</div>
	   				<h4><a href="single.html">Contrary to popular belief</a></h4>
	   				<p>$ 199</p>
	   			</div>
	            <div class="col-md-3 w3-quarter">
	            	<div class="content_box">
						<a href="single.html"><img src="images/pic2.jpg" class="img-responsive" alt=""></a>
	   				</div>
	   				<h4><a href="single.html">Contrary to popular belief</a></h4>
					<p>$ 199</p>
	   			</div>
	            <div class="col-md-3 w3-quarter">
	            	<div class="content_box">
						<a href="single.html"><img src="images/pic4.jpg" class="img-responsive" alt=""></a>
					</div>
	   				<h4><a href="single.html">Contrary to popular belief</a></h4>
	   				<p>$ 199</p>
	   			</div>
	            <div class="col-md-3 w3-quarter">
	            	<div class="content_box">
						<a href="single.html"><img src="images/pic5.jpg" class="img-responsive" alt=""></a>
	   				</div>
	   				<h4><a href="single.html">Contrary to popular belief</a></h4>
	   				<p>$ 199</p>
				</div>
			</div>
		</div>
	</div>
</div>      

<!-- footer -->
<div class="w3-container w3-border-top">
	<div class="w3-half w3-container w3-center">
		<h3>Our Stores</h3>
			<address class="address">
              <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
              <dl>
                 <dd>Freephone:<span> +1 800 254 2478</span></dd>
                 <dd>Telephone:<span> +1 800 547 5478</span></dd>
                 <dd>FAX: <span>+1 800 658 5784</span></dd>
                 <dd>E-mail:&nbsp; <a href="mailto@example.com">info(at)buyshop.com</a></dd>
              </dl>
           </address>
		  </div>
	<div class="w3-half w3-container">
		<h3 style="margin-left:10vw">Support</h3>
			<ul class="list_1 w3-center">
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Payment</a></li>
				<li><a href="#">Services</a></li>
			</ul>
			<ul class="list_1 w3-center">
				<li><a href="#">Services</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
	</div>
</div>

   <!-- copyright -->
<div class="w3-container">
	<div class="copy">
    <p>Copyright &copy; 2022.SUN SHUO     All rights reserved.</p>
	</div>
</div>
</body>
</html>		