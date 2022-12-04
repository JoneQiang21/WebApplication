<?php
$uname = $_COOKIE["username"];
$size = $_POST['size'];
$id = explode("id=",$_SERVER['QUERY_STRING'])[1];
$id=trim($id);
include_once("conn.php");
if(!($uname)){
	echo 'Times out! <br> Returning to previous page...';
	header("Refresh:2;url='single.php?id=".$id."'");}
$sql = "SELECT * FROM cart WHERE (customer_id=$uname and product_id=$id and size='$size')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<script>alert('Item already in cart!')</script>";
	header("Refresh:0;url='single.php?id=".$id."'");}
else{
$sql = "INSERT INTO cart (product_id,customer_id,size)
	VALUES (".$id.",".$uname.",'".$size."')";
	$result = mysqli_query($conn,$sql);
	echo "<script>alert('Successfully added to cart!')</script>";
	header("Refresh:0;url='single.php?id=".$id."'");}
$conn->close();
?>