<?php
include_once("connproduct.php");
$label=$_SERVER['QUERY_STRING'];
echo $label."<br>";
$sex=explode("&",$label)[0];
$sex=explode("=",$sex)[1];
$cat=explode("&",$label)[1];
$cat=explode("=",$cat)[1];
$feature=explode("&",$label)[1];
$feature=explode("=",$feature)[1];

$sql = "SELECT * FROM products WHERE (sex='$sex')";
$result = $conn->query($sql);
$product_names = array();
$file_names = array();
if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	array_push($product_names,$row["product_name"]);
	array_push($file_names,$row["file_name"]);
	  }
	} else {
	  echo "0 results";}
	 print_r($product_names);
$conn->close();
?>