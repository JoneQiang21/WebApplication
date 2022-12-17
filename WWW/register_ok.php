<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>无标题文档</title>
</head>
	

<body>
	<?php
	include_once("conn.php");
	header("content-type:text/html; charest=UTF-8");

	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=strtolower($_POST['email']);
	$password=$_POST['pwd'];

	if(!($fname and $lname and $email and $password)){
	echo("Empty input!");
	header("Refresh:3;url='register.html'");
	
}else{
	
	$sql = "SELECT * FROM users WHERE (email='$email')";
	$result = $conn->query($sql);

        if ($result->num_rows > 0) {
		echo"User already exists! <br> Returning to registration page...";
		header("Refresh:3;url='register.html'");
		
	}else{
		$sql = "INSERT INTO users (Firstname, Lastname, email,password)
		VALUES ('".$fname."','".$lname."','".$email."','".$password."')";
 
		$result = mysqli_query($conn,$sql);
		
		if($result){
			echo"Nice!";
			}else{echo"<script>alert('Failed!');history.go(-1);</script>";}

	echo"<br>";
	echo"Welcome, $fname $lname ! <br> Teleporting to Login page....";
	header("Refresh:3;url='login.html'");
	}
	}
	?>
</body>
</html>