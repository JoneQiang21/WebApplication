<?php
include_once("connproduct.php");
$label=$_SERVER['QUERY_STRING'];
$sex=explode("sex=",$label)[1];
$sex=explode("&",$sex)[0];
$cat=explode("cat=",$label)[1];
$cat=explode("&",$cat)[0];
$feature=explode("feature=",$label)[1];
$feature=explode("&",$feature)[0];
$type=explode("type=",$label)[1];
$type=explode("&",$type)[0];
$sort=explode("order=",$label)[1];
$sort=explode("&",$sort)[0];

if($sex!=null){
$sex_query=" and sex='".$sex."'";}
else{$sex_query="and sex in ('0','1')";}


if($cat!=null){
$cat_query=" and category='".$cat."'";}
else{$cat_query='';}

if($type!=null){
$type_query=" and type='".$type."'";}
else{$type_query="";}

if($feature!=null){
$feature_query=" and feature='".$feature."'";}
else{$feature_query='';}

if($sort==null){$sort='id';}
else if($sort=='priced'){$sort='price desc';}

$sql = "SELECT * FROM products WHERE (id!='null'".$sex_query.$cat_query.$type_query.$feature_query.") order by ".$sort;
$result = $conn->query($sql);
$product_names = array();
$file_names = array();
$price= array();
$intro= array();
$id= array();
if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	array_push($product_names,$row["product_name"]);
	array_push($file_names,$row["file_name"]);
	array_push($price,"$".$row["price"]);
	array_push($intro,$row["intro"]);
	array_push($id,$row["id"]);
	  }
	} 
$conn->close();
?>