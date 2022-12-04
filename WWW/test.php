<?php
setcookie("username","123", time() + 300);
print_r($_COOKIE["username"]);
if(isset($_COOKIE['username'])==1){echo "true";}
else{echo "false";}
?>