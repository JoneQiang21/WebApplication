<?php
if($_GET["del"]=="cookies")
{
setcookie("username", "", time()-3600);}

if(isset($_COOKIE['username']))
{
	$userid=$_COOKIE['username'];}
else{
	echo 'Times out! <br> Returning to login page...';
	header("Refresh:2;url='login.html'");}

$cart=$_POST;
$cart_id=array();
$quantity=array();
foreach($cart as $x => $val)
{
if($val=='on')
{array_push($cart_id,$x);}
}

echo "<br>";
$quantity_id=array();
foreach($cart_id as $x => $val)
{
array_push($quantity_id,'quantity_'.$val);}
$quantity=array();
foreach($cart as $x => $val)
{
if(in_array($x,$quantity_id))
{array_push($quantity,$val);}
}

$product_id=array();
$size=array();
include_once("conn.php");

$sql = "SELECT * FROM cart WHERE customer_id=$userid order by cart_id";
$result = $conn->query($sql);
	while($row = mysqli_fetch_assoc($result)) {
	array_push($product_id,$row["product_id"]);
	array_push($size,$row["size"]);}
	
for($x = 0; $x < count($cart_id); $x++){
mysqli_query($conn,"DELETE FROM cart WHERE cart_id=".$cart_id[$x]);}
mysqli_close($conn);



include_once("connproduct.php");
for($x = 0; $x < count($cart_id); $x++){
$sql = "INSERT INTO orders (product_id, customer_id,quantity,size)
	VALUES ($product_id[$x],$userid,$quantity[$x],'$size[$x]')";
	$result = mysqli_query($conn,$sql);}
	if($result){echo "<script>alert('Your order has been placed')</script>";
	header("Refresh:0;url='index.html'");}
mysqli_close($conn);
?>