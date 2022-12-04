<!DOCTYPE HTML>
<html>
<head>

<?php
	include_once("label.php");
?>

<title>Item Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Custom Theme files -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
.grid1_of_4 {
	margin-bottom:10px;
}
.view .img-responsive{
	 height:280px;
	 width:auto;
	 overflow: hidden;
	 margin-top:13px;}
</style>

<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
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

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>



</head>
<body>



<!-- side menu -->
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"><b>Close &times</b></button>
	<!-- start sidebar -->
	<div class="col-md-3" style="z-index:4">
		<div class="sky-form h_nav">
			<h4>All</h4>
			<ul class="w3-center w3-sans-serif w3-text-blue-grey">
				<li><a href="women.html">new arrivals</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="item.php">all</a></li>
			</ul>	
		</div>
		<form method="post">
		<h3 style="padding-left:2vw"><i>Filter by</i></h3>
		<section  class="sky-form" >
					<h4>catogories</h4>
						<div class="w3-sans-serif w3-text-blue-grey" text-transform='capitalize' style="padding: 0 2vw;">
								<label for="cat1" class="checkbox"><input type="checkbox" name="catogory" id="cat1"><i></i>Sports</label>
								<label for="cat2" class="checkbox"><input type="checkbox" name="catogory" id="cat2"><i></i>fashion</label>
								<label for="cat3" class="checkbox"><input type="checkbox" name="catogory" id="cat3"><i></i>households</label>
								<label for="cat4" class="checkbox"><input type="checkbox" name="catogory" id="cat4"><i></i>decoration</label>
								<label for="cat5" class="checkbox"><input type="checkbox" name="catogory" id="cat5"><i></i>Bags</label>
								<label for="cat6" class="checkbox"><input type="checkbox" name="catogory" id="cat6"><i></i>shoes</label>
								<label for="cat7" class="checkbox"><input type="checkbox" name="catogory" id="cat7"><i></i>clothes</label>
								<label for="cat8" class="checkbox"><input type="checkbox" name="catogory" id="cat8"><i></i>Jewellery</label>
								<label for="cat9" class="checkbox"><input type="checkbox" name="catogory" id="cat9"><i></i>belt</label>
								<label for="cat10" class="checkbox"><input type="checkbox" name="catogory" id="cat10"><i></i>watches</label>
								<label for="cat11" class="checkbox"><input type="checkbox" name="catogory" id="cat11"><i></i>glasses</label>
								<label for="cat12" class="checkbox"><input type="checkbox" name="catogory" id="cat12"><i></i>scarfs</label>
								<label for="cat13" class="checkbox"><input type="checkbox" name="catogory" id="cat13"><i></i>hats</label>
						</div>
		</section>
		<section class="sky-form" style="margin-bottom:2px;">
			<h4>colour</h4>
			<ul class="w_nav2">
				<li><label class="colorbox color1" ><input type="checkbox" id="color1" name="colorcheck" value="#1"><i></i></label></li>
				<li><label class="colorbox color2" ><input type="checkbox" id="color2" name="colorcheck" value="#2"><i></i></label></li>
				<li><label class="colorbox color3" ><input type="checkbox" id="color3" name="colorcheck" value="#3"><i></i></label></li>
				<li><label class="colorbox color4" ><input type="checkbox" id="color4" name="colorcheck" value="#4"><i></i></label></li>
				<li><label class="colorbox color5" ><input type="checkbox" id="color5" name="colorcheck" value="#5"><i></i></label></li>
				<li><label class="colorbox color6" ><input type="checkbox" id="color6" name="colorcheck" value="#6"><i></i></label></li>
				<li><label class="colorbox color7" ><input type="checkbox" id="color7" name="colorcheck" value="#7"><i></i></label></li>
				<li><label class="colorbox color8" ><input type="checkbox" id="color8" name="colorcheck" value="#8"><i></i></label></li>
				<li><label class="colorbox color9" ><input type="checkbox" id="color8" name="colorcheck" value="#9"><i></i></label></li>
				<li><label class="colorbox color10" ><input type="checkbox" id="color10" name="colorcheck" value="#10"><i></i></label></li>
				<li><label class="colorbox color11" ><input type="checkbox" id="color11" name="colorcheck" value="#11"><i></i></label></li>
				<li><label class="colorbox color12" ><input type="checkbox" id="color12" name="colorcheck" value="#12"><i></i></label></li>
				<li><label class="colorbox color13" ><input type="checkbox" id="color13" name="colorcheck" value="#13"><i></i></label></li>
				<li><label class="colorbox color14" ><input type="checkbox" id="color14" name="colorcheck" value="#14"><i></i></label></li>
				<li><label class="colorbox color15" ><input type="checkbox" id="color15" name="colorcheck" value="#15"><i></i></label></li>
				<li><label class="colorbox color16"><input type="checkbox" id="color16" name="colorcheck" value="#16"><i></i></label></li>
			</ul>
		</section>
		<section class="register-but w3-center sky-form" style="margin-top:0;margin-bottom:15px;">
			<input type="submit" value="Filter">
		</section>
		</form>
	  </div>
   </div>


<!-- top bar -->
<div class="header_top">
	<div style="position:fixed;top: 0;left:0;width:100vw;z-index:3">
		<button id="openNav" class="w3-button w3-xlarge" onclick="w3_open()">&#9776;</button>
	
	</div>
	<!-- account button -->
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
										<li><a href="item.php?sex=1&">Caps & Hats</a></li>
										<li><a href="item.php?sex=1&">Hoodies & Sweatshirts</a></li>
										<li><a href="item.php?sex=1&">Jackets & Coats</a></li>
										<li><a href="item.php?sex=1&">Jeans</a></li>
										<li><a href="item.php?sex=1&">Jewellery</a></li>
										<li><a href="item.php?sex=1&">Jumpers & Cardigans</a></li>
										<li><a href="item.php?sex=1&">Leather Jackets</a></liÖ>
										<li><a href="item.php?sex=1&">Long Sleeve T-Shirts</a></li>
										<li><a href="item.php?sex=1&">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="item.php?sex=1&">Shirts</a></li>
										<li><a href="item.php?sex=1&">Shoes, Boots & Trainers</a></li>
										<li><a href="item.php?sex=1&">Shorts</a></li>
										<li><a href="item.php?sex=1&">Suits & Blazers</a></li>
										<li><a href="item.php?sex=1&">Sunglasses</a></li>
										<li><a href="item.php?sex=1&">Sweatpants</a></li>
										<li><a href="item.php?sex=1&">Swimwear</a></li>
										<li><a href="item.php?sex=1&">Trousers & Chinos</a></li>
										<li><a href="item.php?sex=1&">T-Shirts</a></li>
										<li><a href="item.php?sex=1&">Underwear & Socks</a></li>
										<li><a href="item.php?sex=1&">Vests</a></li>
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
										<li><a href="item.php?sex=0&">Accessories</a></li>
										<li><a href="item.php?sex=0&">Bags</a></li>
										<li><a href="item.php?sex=0&">Caps & Hats</a></li>
										<li><a href="item.php?sex=0&">Hoodies & Sweatshirts</a></li>
										<li><a href="item.php?sex=0&">Jackets & Coats</a></li>
										<li><a href="item.php?sex=0&">Jeans</a></li>
										<li><a href="item.php?sex=0&">Jewellery</a></li>
										<li><a href="item.php?sex=0&">Jumpers & Cardigans</a></li>
										<li><a href="item.php?sex=0&">Leather Jackets</a></li>
										<li><a href="item.php?sex=0&">Long Sleeve T-Shirts</a></li>
										<li><a href="item.php?sex=0&">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="item.php?sex=0&">Shirts</a></li>
										<li><a href="item.php?sex=0&">Shoes, Boots & Trainers</a></li>
										<li><a href="item.php?sex=0&">Shorts</a></li>
										<li><a href="item.php?sex=0&">Suits & Blazers</a></li>
										<li><a href="item.php?sex=0&">Sunglasses</a></li>
										<li><a href="item.php?sex=0&">Sweatpants</a></li>
										<li><a href="item.php?sex=0&">Swimwear</a></li>
										<li><a href="item.php?sex=0&">Trousers & Chinos</a></li>
										<li><a href="item.php?sex=0&">T-Shirts</a></li>
										<li><a href="item.php?sex=0&">Underwear & Socks</a></li>
										<li><a href="item.php?sex=0&">Vests</a></li>
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
					<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="Subscribe" id="submit" name="submit">
					</div>
				</div>
			</div>
 		</div>
	</div>
</div>

<!-- sort -->
<div class="container women_main col-md-9 w_content women w3-pagepadding">
	<a href="#"><h4>Total - <span><?php echo count($id);   ?> items</span> </h4></a>
	<?php $thisurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];$thisurl1=explode("order=",$thisurl)[0];
	$thisurl2=explode("page=",$thisurl)[0];?>
	<ul class="w_nav">
		<li >Sort : </li>
		<li><a class="active" href=<?php echo $thisurl1."order=id&" ?>>popular</a></li> |
		<li><a href=<?php echo $thisurl1."order=date&" ?>>new </a></li> |
		<li><a href="#">discount</a></li> |
		<li><a href=<?php echo $thisurl1."order=price&"  ?>>price: Low High </a></li> |
		<li><a href=<?php echo $thisurl1."order=priced&" ?>>price: High Low </a></li> 
	</ul>
</div>





<div id="main" class="w3-pagepadding">
<!-- product -->
<div class="container">
	<div class="col-md-9 w_content">
		<!-- grids_of_4 -->
		<?php  
		$x=0;
		for($x;$x<count($id);$x++){
		if(($x+1)%4==1){echo '<div class="grids_of_4">';}
		echo'
		  <div class="grid1_of_4">
				<div class="content_box"><a href="single.php?id='.$id[$x].'">
					<div class="view view-fifth">
						<img src="images/'.$file_names[$x].'"  class="img-responsive" alt=""/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
					</div>
					</a>
				    <h5><a href="details.html">'.$product_names[$x].'</a></h5>
				    <h6>'.$intro[$x].'<h6>
					'.$price[$x].'
			   	</div>
			</div>
		';
		if(($x+1)%4==0){echo '</div >';}}
		if($x%4!=0){echo '</div >';}
		?>
		

	</div>
</div>
   <!-- pagination -->
<div class="w3-bar w3-border-top w3-center">
  <a href=<?php echo $thisurl2."page=1"?> class="w3-button">&laquo;</a>
  <a href=<?php echo $thisurl2."page=1"?> class="w3-button">1</a>
  <a href=<?php echo $thisurl2."page=2"?> class="w3-button">2</a>
  <a href=<?php echo $thisurl2."page=3"?> class="w3-button">3</a>
  <a href=<?php echo $thisurl2."page=4"?> class="w3-button">4</a>
  <a href=<?php echo $thisurl2."page=4"?> class="w3-button">&raquo;</a>
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
				<li><a href=<?php echo $thisurl."order=price&"  ?>>Terms & Conditions</a></li>
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

   <!-- copyrightr -->
<div class="w3-container">
	<div class="copy">
    <p>Copyright &copy; 2022.SUN SHUO     All rights reserved.</p>
	</div>
</div>
</body>
</html>			