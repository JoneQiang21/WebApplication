<?php

include_once("connproduct.php");
$label=$_SERVER['QUERY_STRING'];

$session=explode("session=",$label)[1];
$session=explode("&",$session)[0];

if($session==1){}else{unset($_SESSION['type']);unset($_SESSION['color']);unset($_SESSION['style']);unset($_SESSION['search']);}
$search=$_SESSION['search'];
if($_POST){
	$type=array();
	$color=array();
	$style=array();
	$search=$_POST['search'];
	if($search){$_SESSION['search']=$search;}
	##print_r($_SESSION['search']);
foreach($_POST as $x => $val){
	if (strstr($x,'type')){array_push($type,'"'.$val.'"');}
	if (strstr($x,'color')){array_push($color,'"'.$val.'"');}
	if (strstr($x,'style')){array_push($style,'"'.$val.'"');}}
if($type!=null){$_SESSION['type']=$type;}else{unset($_SESSION['type']);}
if($color!=null){$_SESSION['color']=$color;}else{unset($_SESSION['color']);}
if($style!=null){$_SESSION['style']=$style;}else{unset($_SESSION['style']);}
}

if(isset($_SESSION['type'])){
$type_query=" and type in (".implode(",",$_SESSION['type']).")";}
else{$type_query="";}

if(isset($_SESSION['style'])){
$style_query=" and style in (".implode(",",$_SESSION['style']).")";}
else{$style_query="";}

if(isset($_SESSION['color'])){
$color_query=" and color in (".implode(",",$_SESSION['color']).")";}
else{$color_query="";}

$sex=explode("sex=",$label)[1];
$sex=explode("&",$sex)[0];
$cat=explode("cat=",$label)[1];
$cat=explode("&",$cat)[0];
$sort=explode("order=",$label)[1];
$sort=explode("&",$sort)[0];
$page=explode("page=",$label)[1];
$page=explode("&",$page)[0];

if($sex!=null){
$sex_query=" and sex='".$sex."'";}
else{$sex_query="and sex in ('0','1')";}


if($cat!=null){
$cat_query=" and category='".$cat."'";}
else{$cat_query='';}


if($sort==null){$sort='id';}
else if($sort=='priced'){$sort='price desc';}

if($page!=null){
$page=intval($page);}
else{$page=1;}

if($search!=null){
$search_query=" and product_name like '%$search%'";}
else{$search_query='';}

$i=1;
$sql = "SELECT * FROM products WHERE (id!='null' ".$sex_query.$cat_query.$search_query.$type_query.$style_query.$color_query.") order by ".$sort;
$result = $conn->query($sql);
$product_names = array();
$file_names = array();
$price= array();
$intro= array();
$id= array();
##print_r($sql);
if (mysqli_num_rows($result) > 0) {
	$item_number=mysqli_num_rows($result);
	  // output data of each row
	while($row = mysqli_fetch_assoc($result) and $i<=12*$page) {
		if($i%12==1){$product_names = array();
					$file_names = array();
					$price= array();
					$intro= array();
					$id= array();}
	array_push($product_names,$row["product_name"]);
	array_push($file_names,$row["file_name"]);
	array_push($price,"$".$row["price"]);
	array_push($intro,$row["intro"]);
	array_push($id,$row["id"]);
	$i++;
	  }
	} 
$conn->close();
?>