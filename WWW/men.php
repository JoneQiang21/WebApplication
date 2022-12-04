<!DOCTYPE HTML>
<html>
<head>

<?php
	include_once("label.php");
?>

<title>Men</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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

<script type="text/javascript">
	function AutoRun()
	　　{ 
		function getlabel(label){
			var string= decodeURI(document.URL);
			if (string.indexOf(label+'=')!=-1){
				string= string.slice(string.indexOf(label+'=')+label.length+1);
				return string;
			}
		}
		var sex=getlabel('sex');
		console.log(getlabel('sex'));
		document.querySelector('#grid_11').setAttribute('src','images/'+sex+'/3.jpg'); }
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
				<li><a href="#">sale</a></li>
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
					<li class="active grid"><a class="color1" href="men.html">Men</a>
					<div class="megapanel">
						<div class="row">
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Accessories</a></li>
										<li><a href="men.html">Bags</a></li>
										<li><a href="men.html">Caps & Hats</a></li>
										<li><a href="men.html">Hoodies & Sweatshirts</a></li>
										<li><a href="men.html">Jackets & Coats</a></li>
										<li><a href="men.html">Jeans</a></li>
										<li><a href="men.html">Jewellery</a></li>
										<li><a href="men.html">Jumpers & Cardigans</a></li>
										<li><a href="men.html">Leather Jackets</a></liÖ>
										<li><a href="men.html">Long Sleeve T-Shirts</a></li>
										<li><a href="men.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Shirts</a></li>
										<li><a href="men.html">Shoes, Boots & Trainers</a></li>
										<li><a href="men.html">Shorts</a></li>
										<li><a href="men.html">Suits & Blazers</a></li>
										<li><a href="men.html">Sunglasses</a></li>
										<li><a href="men.html">Sweatpants</a></li>
										<li><a href="men.html">Swimwear</a></li>
										<li><a href="men.html">Trousers & Chinos</a></li>
										<li><a href="men.html">T-Shirts</a></li>
										<li><a href="men.html">Underwear & Socks</a></li>
										<li><a href="men.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
						</div>
					</div>
					</li>
				   	<li class="active action grid"><a class="color2" href="women.html">Women</a>
					<div class="megapanel">
						<div class="row">
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="women.html">Accessories</a></li>
										<li><a href="women.html">Bags</a></li>
										<li><a href="women.html">Caps & Hats</a></li>
										<li><a href="women.html">Hoodies & Sweatshirts</a></li>
										<li><a href="women.html">Jackets & Coats</a></li>
										<li><a href="women.html">Jeans</a></li>
										<li><a href="women.html">Jewellery</a></li>
										<li><a href="women.html">Jumpers & Cardigans</a></li>
										<li><a href="women.html">Leather Jackets</a></li>
										<li><a href="women.html">Long Sleeve T-Shirts</a></li>
										<li><a href="women.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col3">
								<div class="h_nav">
									<ul>
										<li><a href="women.html">Shirts</a></li>
										<li><a href="women.html">Shoes, Boots & Trainers</a></li>
										<li><a href="women.html">Shorts</a></li>
										<li><a href="women.html">Suits & Blazers</a></li>
										<li><a href="women.html">Sunglasses</a></li>
										<li><a href="women.html">Sweatpants</a></li>
										<li><a href="women.html">Swimwear</a></li>
										<li><a href="women.html">Trousers & Chinos</a></li>
										<li><a href="women.html">T-Shirts</a></li>
										<li><a href="women.html">Underwear & Socks</a></li>
										<li><a href="women.html">Vests</a></li>
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
	<a href="#"><h4>Total - <span>4449 items</span> </h4></a>
	<ul class="w_nav">
		<li >Sort : </li>
		<li><a class="active" href="#">popular</a></li> |
		<li><a href="#">new </a></li> |
		<li><a href="#">discount</a></li> |
		<li><a href="#">price: Low High </a></li> 
	</ul>
</div>





<div id="main" class="w3-pagepadding">
<!-- product -->
<div class="container">
	<div class="col-md-9 w_content">
		<!-- grids_of_4 -->
		<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[0]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   </div>
				   </a>
				    <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[1]."'"?>  class='img-responsive' alt=''/>
				   	   <div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				     <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[2]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				    <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[3]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				    <h5><a href="details.html"> 1234</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
		</div>

        
		<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[4]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				    <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	<img <?php echo "src='images/".$file_names[5]."'"?>  class='img-responsive' alt=''/>
				   	   <div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				     <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[6]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				     <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	 <img <?php echo "src='images/".$file_names[7]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				    <h5><a href="details.html"> 3333</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
		</div>

		<!-- row3 -->
		<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	<img <?php echo "src='images/".$file_names[8]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				     <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	<img <?php echo "src='images/".$file_names[9]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				     <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	   	<img <?php echo "src='images/".$file_names[10]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>
				    <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="single.html">
			   	  <div class="view view-fifth">
			   	  <img <?php echo "src='images/".$file_names[11]."'"?>  class='img-responsive' alt=''/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>öö
				   	  </a>
				   </div>
				     <h5><a href="details.html"> Duis autem</a></h5>
				    <h6>It is a long established fact that a reader<h6>
				     Rs. 499
			   	</div>
			</div>
		</div>
		<!-- end grids_of_4 -->
	</div>
</div>

   <!-- pagination -->
<div class="w3-bar w3-border-top w3-center">
  <a href="#" class="w3-button">&laquo;</a>
  <a href="#" class="w3-button">1</a>
  <a href="#" class="w3-button">2</a>
  <a href="#" class="w3-button">3</a>
  <a href="#" class="w3-button">4</a>
  <a href="#" class="w3-button">&raquo;</a>
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

   <!-- copyrightr -->
<div class="w3-container">
	<div class="copy">
    <p>Copyright &copy; 2022.SUN SHUO     All rights reserved.</p>
	</div>
</div>
</body>
</html>			