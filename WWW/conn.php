<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
		<?php
	
$mysql_server_name = 'localhost'; //改成自己的mysql数据库服务器
$mysql_username = 'root'; //改成自己的mysql数据库用户名
$mysql_password = '350350'; //改成自己的mysql数据库密码
$mysql_database = 'users'; //改成自己的mysql数据库名
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database, 3306); //连接数据库
//连接数据库错误提示
	
	mysqli_query($conn, 'set names utf8');
	mysqli_query($conn, 'set character set utf8');
if (mysqli_connect_errno($conn)) 
{ 
	die("Connection failed: " . mysqli_connect_error()); 
}
	
	
	
?>
</body>
</html>