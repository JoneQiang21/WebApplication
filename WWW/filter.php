<?php
include_once("connproduct.php");
$label=$_SERVER['QUERY_STRING'];
$sex=explode("sex=",$label)[1];
$sex=explode("&",$sex)[0];
$cat=explode("cat=",$label)[1];
$cat=explode("&",$cat)[0];
$type=array();
$color=array();
$style=array();
foreach($_POST as $x => $val){
	if (strstr($x,'type')){array_push($type,'"'.$val.'"');}
	if (strstr($x,'color')){array_push($color,'"'.$val.'"');}
	if (strstr($x,'style')){array_push($style,'"'.$val.'"');}
}
if($type!=null){
$type_query=" and type in (".implode(",",$type).")";}
else{$type_query="";}

if($style!=null){
$style_query=" and style in (".implode(",",$style).")";}
else{$style_query="";}

if($color!=null){
$color_query=" and color in (".implode(",",$color).")";}
else{$color_query="";}

print_r(array_values($type));
print_r($type_query);
print_r($style);
include_once("connproduct.php");
$sql = "SELECT * FROM products WHERE (id!='null'".$type_query.$style_query.$color_query.")";
$result = $conn->query($sql);
print_r($result);
?>