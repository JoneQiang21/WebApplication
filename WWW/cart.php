<?php
session_start();

##delete cookies by setting the time to previous
if($_GET["del"]=="cookies")
{
setcookie("username", "", time()-3600);}
##if cookie exist, go to checkout
if(isset($_COOKIE['username']))
{
	echo "<SCRIPT type=text/javascript>
	window.location = 'checkout.php?uid=".$_COOKIE["username"]."';
	</SCRIPT>";
exit();}
else{
	echo "<SCRIPT type=text/javascript>
	window.location = 'login.html';
	</SCRIPT>";
	exit();
}
?>