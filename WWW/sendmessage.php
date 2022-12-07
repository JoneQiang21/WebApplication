<?php 
include_once("conn.php");

if($_POST['name']){$name=$_POST['name'];}else{$name=null;}
if($_POST['email']){$email=strtolower($_POST['email']);}else{$email=null;}
if($_POST['subject']){$subject=$_POST['subject'];}else{$subject=null;}
$message=$_POST['message'];

$sql = "INSERT INTO messages (name, email, subject,message)
		VALUES ('".$name."','".$email."','".$subject."','".$message."')";
	$result = mysqli_query($conn,$sql);
	#print_r($sql);
	if($result){echo "<script>alert('Your message has been sent.')</script>";$conn->close();header("Refresh:0;url='contact.html'");}
	else{echo "<script>alert('Failed!');history.go(-1);</script>";$conn->close();}
?>