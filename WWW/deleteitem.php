<?php 
if($_GET["del"]=="cookies")
{
setcookie("username", "", time()-3600);}

if(!isset($_COOKIE['username']))
{
	echo 'Times out! <br> Returning to login page...';
	header("Refresh:2;url='login.html'");}
$user_id=$_COOKIE['username'];
$cart_id=explode('id=',$_SERVER['QUERY_STRING'])[1];
include_once("conn.php");
if($cart_id==-1){mysqli_query($conn,"DELETE FROM cart WHERE customer_id=".$user_id);}
else{mysqli_query($conn,"DELETE FROM cart WHERE cart_id=".$cart_id);}
mysqli_close($conn);
echo '<script>window.location.href = document.referrer; </script>';
?>