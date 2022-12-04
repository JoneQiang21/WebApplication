<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>无标题文档</title>
</head>
	

<body>
	<?php
	include_once("conn.php");
	header("content-type:text/html; charest=UTF-8");//文件编码格式

	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=strtolower($_POST['email']);
	$password=$_POST['pwd'];

	if(!($fname and $lname and $email and $password)){
	echo("输入值不能为空");//判断变量名是否为空值
	
}else{
	
	//判断用户是否已存在
	$sql = "SELECT * FROM users WHERE (email='$email')";
	$result = $conn->query($sql);

        if ($result->num_rows > 0) {
		echo"User already exists! <br> Returning to registration page...";
		header("Refresh:3;url='register.html'");
		
	}else{
		$sql = "INSERT INTO users (Firstname, Lastname, email,password)
		VALUES ('".$fname."','".$lname."','".$email."','".$password."')";
 
		$result = mysqli_query($conn,$sql);//承接结果集
		
		if($result){
			echo"Nice!";
			}else{echo"<script>alter('Failed!');history.go(-1);</script>";}

	echo"<br>";
	echo"Welcome, $fname $lname ! <br> Teleporting to Login page....";
	header("Refresh:3;url='login.html'");
	}
	}
	?>
</body>
</html>