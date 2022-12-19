<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>注册完成</title>
<link rel="stylesheet" href="css/style.css">
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
	header("Refresh:3;url='index.html'");
	
}else{
	
	$sql = "SELECT * FROM users WHERE (email='$email')";
	$result = $conn->query($sql);

        if ($result->num_rows > 0) {
		echo '<div class="log-container"><img src="../images/log-banner.png"/><h3> Register success! <br> Returning to landing page...</h3></div>';
		// echo"Register success! <br> Returning to landing page...";
		header("Refresh:3;url='index.html'");
	}else{
		$sql = "INSERT INTO users (Firstname, Lastname, email,password)
		VALUES ('".$fname."','".$lname."','".$email."','".$password."')";
 
		$result = mysqli_query($conn,$sql);
		
		if($result){
			echo"Nice!";
			}else{echo"<script>alert('Failed!');history.go(-1);</script>";}

	echo"<br>";
	echo"Welcome, $fname $lname ! <br> Teleporting to landing page....";
	header("Refresh:3;url='index.html'");
	}
	}
	?>
</body>
</html>