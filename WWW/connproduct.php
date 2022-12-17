<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php
$mysql_server_name = 'localhost'; 
$mysql_username = 'root'; 
$mysql_password = '350350'; 
$mysql_database = 'product'; 
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database, 3306); 
	
	mysqli_query($conn, 'set names utf8');
	mysqli_query($conn, 'set character set utf8');
if (mysqli_connect_errno($conn)) 
{ 
	die("Connection failed: " . mysqli_connect_error()); 
}
	
	
	
?>
</body>
</html>