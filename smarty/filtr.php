<?php
require_once("header.php");
$page="cataloge";
if(isset($_GET['id_cat'])&&!empty($_GET['id_cat']))
{
    $query="Select id,name,price,photo from watch WHERE id_cat={$_GET['id_cat']}";
}
else{
    $query="Select id,name,price,photo from watch";
}
$rez=mysqli_query($dbc,$query) or die("query error");
$watch=array();
while($next=mysqli_fetch_array($rez))
{
    $watch[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
}
$smarty_filtr=new Smarty();
$smarty_filtr->assign("watch",$watch);
$smarty_filtr->assign("num","1");
$content=$smarty_filtr->fetch("filtr.tpl");
require_once("main.php");
?>