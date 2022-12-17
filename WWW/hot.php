
<?php
	include_once("connproduct.php");
	$product_names=array();
	$file_names=array();
	$price=array();
	$id=array();
	$intro=array();
	$sql = "SELECT * FROM products order by sales desc limit 4";
	$result = $conn->query($sql);
		while($row = mysqli_fetch_assoc($result)) {
		array_push($product_names,$row["product_name"]);
		array_push($file_names,$row["file_name"]);
		array_push($price,$row["price"]);
		array_push($id,$row["id"]);
		array_push($intro,$row["intro"]);
		  }
	$conn->close();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Hot Sales</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/etalage.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<style>
.w_content{
	margin-top:40px;
}
.grid1_of_4 {
	margin-bottom:10px;
}
.view .img-responsive{
	 height:280px;
	 width:auto;
	 overflow: hidden;
	 margin-top:13px;}
</style>


<script>
function previouspage(){
history.back();
}
</script>


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
						<li><a class="color5" href="hot.php">Hot</a></li>
						<li><a class="color4" href="about.html">About</a></li>				
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
	<h3 class="m_2">Popular Products</h3>
		<div class="container">
	        <div class="col-md-9 w_content w3-margin-top">
				
				<?php
				$x=0;
				for($x;$x<count($id);$x++){
				if(($x+1)%4==1){echo '<div class="grids_of_4">';}
				echo'
				  <div class="grid1_of_4">
						<div class="content_box"><a href="single.php?id='.$id[$x].'">
							<div class="view view-fifth">
								<img src="images/'.$file_names[$x].'"  class="img-responsive" alt=""/>';
				if ($discount[$x]==1){echo'<div class="mask1"><div class="info"></div></div>';}
				echo'
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