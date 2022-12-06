<!DOCTYPE HTML>
<?php session_start();?>
<html>
<head>

<?php
	include_once("label.php");
	$thisurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];$thisurl1=explode("order=",$thisurl)[0];
	$thisurl1=explode("page=",$thisurl1)[0];
	$thisurl2=explode("page=",'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'])[0];
	$thisurl3=explode("session=",$thisurl1)[0];
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
			<h4>Category</h4>
			<ul class="w3-center w3-sans-serif w3-text-blue-grey">
				<li><a href="item.php?order=date&">new arrivals</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="item.php?sex=1&">men</a></li>
				<li><a href="item.php?sex=0&">women</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="item.php">all</a></li>
			</ul>	
		</div>
		<form action=<?php echo $thisurl3;?> method="post">
		<h3 style="padding-left:2vw"><i>Filter by</i></h3>
		<section  class="sky-form" >
					<h4>Style</h4>
						<div class="w3-sans-serif w3-text-blue-grey" text-transform='capitalize' style="padding: 0 2vw;">
								<label for="cat1" class="checkbox"><input type="checkbox" name="style1" id="cat1" value="sport"><i></i>Sports</label>
								<label for="cat2" class="checkbox"><input type="checkbox" name="style2" id="cat2" value="fashion"><i></i>fashion</label>
								<label for="cat3" class="checkbox"><input type="checkbox" name="style3" id="cat3" value="household"><i></i>households</label>
								<label for="cat4" class="checkbox"><input type="checkbox" name="style4" id="cat4" value="decoration"><i></i>decoration</label>
								<label for="cat5" class="checkbox"><input type="checkbox" name="style5" id="cat5" value="leisure"><i></i>leisure</label>
								<label for="cat6" class="checkbox"><input type="checkbox" name="style6" id="cat6" value="business"><i></i>business</label>
						</div>
		</section>
		<section  class="sky-form" >
					<h4>Type</h4>
						<div class="w3-sans-serif w3-text-blue-grey" text-transform='capitalize' style="padding: 0 2vw;">
								<label for="type1" class="checkbox"><input type="checkbox" name="type1" id="type1" value="top"><i></i>top</label>
								<label for="type2" class="checkbox"><input type="checkbox" name="type2" id="type2" value="bottom"><i></i>bottom</label>
								<label for="type3" class="checkbox"><input type="checkbox" name="type3" id="type3" value="bag"><i></i>Bags</label>
								<label for="type4" class="checkbox"><input type="checkbox" name="type4" id="type4" value="shoes"><i></i>shoes</label>
								<label for="type5" class="checkbox"><input type="checkbox" name="type5" id="type5" value="jewellery"><i></i>Jewellery</label>
								<label for="type6" class="checkbox"><input type="checkbox" name="type6" id="type6" value="belt"><i></i>belts</label>
								<label for="type7" class="checkbox"><input type="checkbox" name="type7" id="type7" value="watch"><i></i>watches</label>
								<label for="type8" class="checkbox"><input type="checkbox" name="type8" id="type8" value="glasses"><i></i>glasses</label>
								<label for="type9" class="checkbox"><input type="checkbox" name="type9" id="type9" value="scarf"><i></i>scarfs</label>
								<label for="type10" class="checkbox"><input type="checkbox" name="type10" id="type10" value="hat"><i></i>hats</label>
						</div>
		</section>
		<section class="sky-form" style="margin-bottom:2px;">
			<h4>colour</h4>
			<ul class="w_nav2">
				<li><label class="colorbox color1" ><input type="checkbox" id="color1" name="color1" value="blue"><i></i></label></li>
				<li><label class="colorbox color2" ><input type="checkbox" id="color2" name="color2" value="cyan"><i></i></label></li>
				<li><label class="colorbox color3" ><input type="checkbox" id="color3" name="color3" value="purple"><i></i></label></li>
				<li><label class="colorbox color4" ><input type="checkbox" id="color4" name="color4" value="white"><i></i></label></li>
				<li><label class="colorbox color5" ><input type="checkbox" id="color5" name="color5" value="red"><i></i></label></li>
				<li><label class="colorbox color6" ><input type="checkbox" id="color6" name="color6" value="green"><i></i></label></li>
				<li><label class="colorbox color7" ><input type="checkbox" id="color7" name="color7" value="orange"><i></i></label></li>
				<li><label class="colorbox color9" ><input type="checkbox" id="color9" name="color8" value="yellow"><i></i></label></li>
				<li><label class="colorbox color11" ><input type="checkbox" id="color11" name="color9" value="gray"><i></i></label></li>
				<li><label class="colorbox color13" ><input type="checkbox" id="color13" name="color10" value="pink"><i></i></label></li>
				<li><label class="colorbox color14" ><input type="checkbox" id="color14" name="color11" value="brown"><i></i></label></li>
				<li><label class="colorbox color15" ><input type="checkbox" id="color15" name="color12" value="olive"><i></i></label></li>
				<li><label class="colorbox color16"><input type="checkbox" id="color16" name="color13" value="black"><i></i></label></li>
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

<!-- sort -->
<div class="container women_main col-md-9 w_content women w3-pagepadding">
	<h4>Total - <span><?php echo $item_number;?> items</span> </h4>
	<ul class="w_nav">
		<li >Sort : </li>
		<li><a class="active" href=<?php echo $thisurl1."order=id&&page=1&session=1&" ?>>popular</a></li> |
		<li><a href=<?php echo $thisurl1."order=date&page=1&session=1&" ?>>new </a></li> |
		<li><a>discount</a></li> |
		<li><a href=<?php echo $thisurl1."order=price&page=1&session=1&"  ?>>price: Low High </a></li> |
		<li><a href=<?php echo $thisurl1."order=priced&page=1&session=1&" ?>>price: High Low </a></li> 
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
				    <h5><a href="single.php?id='.$id[$x].'">'.$product_names[$x].'</a></h5>
				    <h6>'.$intro[$x].'<h6>
					'.$price[$x].'
			   	</div>
			</div>
		';
		if(($x+1)%4==0){echo '</div >';}}
		if($x%4!=0){echo '</div >';}
		$x=0;
		?>
		

	</div>
</div>
   <!-- pagination -->
<div class="w3-bar w3-border-top w3-center">
  <a href=<?php echo $thisurl2."page=1&session=1&"?> class="w3-button">&laquo;</a>
  <a href=<?php echo $thisurl2."page=1&session=1&"?> class="w3-button">1</a>
  <a href=<?php echo $thisurl2."page=2&session=1&"?> class="w3-button">2</a>
  <a href=<?php echo $thisurl2."page=3&session=1&"?> class="w3-button">3</a>
  <a href=<?php echo $thisurl2."page=4&session=1&"?> class="w3-button">4</a>
  <a href=<?php echo $thisurl2."page=4&session=1&"?> class="w3-button">&raquo;</a>
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