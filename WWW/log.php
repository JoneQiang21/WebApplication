<link rel="stylesheet" href="css/style.css">
<?php
    session_start();
    //判断uname和pwd是否赋值
    if(isset($_POST['uname']) && isset($_POST['pwd'])){
        $name = $_POST['uname'];
        $pwd = $_POST['pwd'];
        //连接数据库
        require("conn.php");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //验证内容是否与数据库的记录吻合。
        $sql = "SELECT * FROM users WHERE (email='$name') AND (password='$pwd')";
        //执行上面的sql语句并将结果集赋给result。
        $result = $conn->query($sql);
		
        //判断结果集的记录数是否大于0
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
				echo '<div class="log-container"><img src="../images/log-banner.png"/><h3> Welcome Back!<h3/><p class="user-name">' .$row['Firstname'].'  '.$row['Lastname'].'</p></div>';
				setcookie("username",$row['Id'], time() + 1200);
				header("Refresh:3;url='checkout.php'");
            }
        } else {
            echo "Incorrect username or password! <br> Returning to Login page...";
			header("Refresh:2;url='login.html'");
        }
        $conn->close();  //关闭数据库     
    }
?>
