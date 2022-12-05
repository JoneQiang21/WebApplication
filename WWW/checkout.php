<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>

<?php


if($_GET["del"]=="cookies")
{
setcookie("username", "", time()-3600);}

if(isset($_COOKIE['username']))
{
	$username=$_COOKIE['username'];}
else{
	echo "<SCRIPT type=text/javascript>
	window.location = 'login.html';
	</SCRIPT>";
}
include_once("conn.php");
$sql = "SELECT * FROM cart WHERE customer_id=$username order by cart_id";
$result = $conn->query($sql);

$product_id = array();
$cart_id= array();
$size = array();
if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	array_push($product_id,$row["product_id"]);
	array_push($size,$row["size"]);
	array_push($cart_id,$row["cart_id"]);}
	}
else{echo "<SCRIPT type=text/javascript>window.location = 'emptycheckout.html';</SCRIPT>";$conn->close();exit();}
$conn->close();
include_once("connproduct.php");
$file_names = array();
$product_names = array();
$prices = array();
foreach ($product_id as $value) {
	$sql = "SELECT * FROM products WHERE id=$value";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	array_push($product_names,$row["product_name"]);
	array_push($file_names,$row["file_name"]);
	array_push($prices,$row["price"]);}
	} 
	}
$conn->close();
?>




<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<style>
.goods img{ max-height: 12vh;width:auto;margin:2vh10px;float:left;}
</style>

<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
	window.onload = function () {
		if (!document.getElementsByClassName) {
			document.getElementsByClassName = function (cls) {
				var ret = [];
				var els = document.getElementsByTagName('*');
				for (var i = 0, len = els.length; i < len; i++) {

					if (els[i].className.indexOf(cls + ' ') >=0 || els[i].className.indexOf(' ' + cls + ' ') >=0 || els[i].className.indexOf(' ' + cls) >=0) {
						ret.push(els[i]);
					}
				}
				return ret;
			}
		}

		var table = document.getElementById('cartTable'); // 购物车表格
		var selectInputs = document.getElementsByClassName('check'); // 所有勾选框
		var checkAllInputs = document.getElementsByClassName('check-all') // 全选框
		var tr = table.children[1].rows; //行
		var selectedTotal = document.getElementById('selectedTotal'); //已选商品数目容器
		var priceTotal = document.getElementById('priceTotal'); //总计
		var deleteAll = document.getElementById('deleteAll'); // 删除全部按钮
		var selected = document.getElementById('selected'); //已选商品
		var foot = document.getElementById('foot');

		// 更新总数和总价格，已选浮层
		function getTotal() {
			var seleted = 0;
			var price = 0;
			var HTMLstr = '';
			for (var i = 0, len = tr.length; i < len; i++) {
				if (tr[i].getElementsByTagName('input')[0].checked) {
					tr[i].className = 'on';
					seleted += parseInt(tr[i].getElementsByTagName('input')[1].value);
					price += parseFloat(tr[i].cells[4].innerHTML);
					HTMLstr += '<div><img src="' + tr[i].getElementsByTagName('img')[0].src + '"><span class="del" index="' + i + '">取消选择</span></div>'
				}
				else {
					tr[i].className = '';
				}
			}
		
			selectedTotal.innerHTML = seleted;
			priceTotal.innerHTML = price.toFixed(2);
			selectedViewList.innerHTML = HTMLstr;
		
			if (seleted == 0) {
				foot.className = 'foot';
			}
		}

		// 计算单行价格
		function getSubtotal(tr) {
			var cells = tr.cells;
			var price = cells[2]; //单价
			var subtotal = cells[4]; //小计td
			var countInput = tr.getElementsByTagName('input')[1]; //数目input
			var span = tr.getElementsByTagName('span')[1]; //-号
			//写入HTML
			subtotal.innerHTML = (parseInt(countInput.value) * parseFloat(price.innerHTML)).toFixed(2);

		}

		// 点击选择框
		for(var i = 0; i < selectInputs.length; i++ ){
			selectInputs[i].onclick = function () {
				if (this.className.indexOf('check-all') >= 0) { //如果是全选，则吧所有的选择框选中
					for (var j = 0; j < selectInputs.length; j++) {
						selectInputs[j].checked = this.checked;
					}
				}
				if (!this.checked) { //只要有一个未勾选，则取消全选框的选中状态
					for (var i = 0; i < checkAllInputs.length; i++) {
						checkAllInputs[i].checked = false;
					}
				}
				getTotal();//选完更新总计
			}
		}

	   

		//为每行元素添加事件
		for (var i = 0; i < tr.length; i++) {
			//将点击事件绑定到tr元素
			tr[i].onclick = function (e) {
				var e = e || window.event;
				var el = e.target || e.srcElement; //通过事件对象的target属性获取触发元素
				var cls = el.className; //触发元素的class
				var countInout = this.getElementsByTagName('input')[1]; // 数目input
				var value = parseInt(countInout.value); //数目
				//通过判断触发元素的class确定用户点击了哪个元素
				switch (cls) {
					case 'add': //点击了加号
						countInout.value = value + 1;
						getSubtotal(this);
						break;
					case 'reduce': //点击了减号
						if (value > 1) {
							countInout.value = value - 1;
							getSubtotal(this);
						}
						break;
					case 'delete': //点击了删除
						this.parentNode.removeChild(this);
						break;
				}
				getTotal();
			}
			// 给数目输入框绑定keyup事件
			tr[i].getElementsByTagName('input')[1].onkeyup = function () {
				var val = parseInt(this.value);
				if (isNaN(val) || val <= 0) {
					val = 1;
				}
				if (this.value != val) {
					this.value = val;
				}
				getSubtotal(this.parentNode.parentNode); //更新小计
				getTotal(); //更新总数
			}
		}

		// 点击全部删除
		deleteAll.onclick = function () {
			if (selectedTotal.innerHTML != 0) {
				var con = confirm('Are you sure to delete all items?'); //弹出确认框
				if (con) {
					for (var i = 0; i < tr.length; i++) {
						// 如果被选中，就删除相应的行
							tr[i].parentNode.removeChild(tr[i]); 
							window.location.href = 'deleteitem.php?id=-1'; 
							// 删除相应节点
							i--; //回退下标位置
					}
				}
			} else {
				alert('No item selected!');
			}
			getTotal(); //更新总数
		}

		// 默认全选
		checkAllInputs[0].checked = true;
		checkAllInputs[0].onclick();
	}
</script>




</head>



<body>
<div class="header_top">
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
										<li><a href="item.php?sex=1&cat=suits&">Suits & Blazers</a></li>
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
											
												<li><a href="item.php?sex=0&cat=shoes&">Shoes, Boots & Trainers</a></li>
												<li><a href="item.php?sex=0&cat=shorts&">Shorts</a></li>
												<li><a href="item.php?sex=0&cat=suits&">Suits & Blazers</a></li>
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
					<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="Subscribe" id="submit" name="submit">
					</div>
				</div>
			</div>
 		</div>
	</div>
</div>

<form action="pay.php" method="post">
<div class="catbox">
	<table id="cartTable" style="margin-top:10vh;">
		<thead >
			<tr>
				<th style="width:8vw;"><label class= "checkbox" style="display: inline-block;"><input class="check-all check" type="checkbox"/><i style="background-color:#ffffff;top:3px;margin-right:2vw;"> </i>Select All</label></th>
				<th >Item</th>
				<th>Unit Price</th>
				<th style="width:10vw;">Quantity</th>
				<th>Total Price</th>
				<th style="width:5vw;">Operation</th>
			</tr>
		</thead>
		<tbody>
			<?php
			 $i=0;
			while($i<=(count($product_names)-1)){
				echo '
				<tr>
					<td><label class="checkbox"><input name='.$cart_id[$i].' class="check-one check" type="checkbox"/><i ></i></label></td>
					<td class="goods"><img src="images/'.$file_names[$i].'" alt=""/><span>'.$product_names[$i].'|Size:'.$size[$i].'</span></td>
					<td class="price">'.$prices[$i].'</td>
					<td class="count"><span class="reduce">-</span><input name="quantity_'.$cart_id[$i].'" class="count-input" type="text" value="1"/><span class="add">+</span></td>
					<td class="subtotal">'.$prices[$i].'</td>
					<td class="operation"><a href="deleteitem.php?id='.$cart_id[$i].'"><span class="delete" >delete</span></a></td>
				</tr>
				';
				$i++;
			}
			?>

		</tbody>
	</table>
	
	<div class="foot" id="foot">
		<label class="fl checkbox select-all" ><input type="checkbox" class="check-all check"/><i style="background-color:#ffffff;top:13px;margin-right:2vw;"></i>&nbsp;select all</label>
		<a class="fl delete" id="deleteAll" href="javascript:;">delete all</a>
		
		<div class="fr closing"><input type="submit" value="Checkout"/></div>
		
		<div class="fr fttotal">Total：$<span id="priceTotal">0.00</span></div>
		<div class="fr selected" id="selected"><span id="selectedTotal">0</span> Items selected</div>

</div>
</form>




<!-- footer -->
<div class="w3-container w3-border-top footer" style="margin-top:10vh;">
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
<div class="w3-container footer">
	<div class="copy">
    <p>Copyright &copy; 2022.SUN SHUO     All rights reserved.</p>
	</div>
</div>
</body>
</html>		