<?php
session_start();

/*--------------------删除cookies记录，让cookies过期-----------------------------------*/
if($_GET["del"]=="cookies")
{
setcookie("username", "", time()-3600);}
/*------------------------如果判断已经有cookies存在，则进行自动登录操作----------------------------------*/
if($_COOKIE["username"]!="")
{
	echo "<SCRIPT type=text/javascript>
	window.location = 'checkout.html';
	</SCRIPT>";
exit();}
else{
	echo "<SCRIPT type=text/javascript>
	window.location = 'login.html';
	</SCRIPT>";
	exit();
}
?>