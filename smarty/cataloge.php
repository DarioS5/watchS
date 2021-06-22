<?php
require_once("header.php");
$page="cataloge";
$query="Select id,name,price,photo from watch";
$rez=mysqli_query($dbc,$query) or die("query error");
$watch=array();
while($next=mysqli_fetch_array($rez)) {
    if (empty($next['photo'])) {
        $next['photo'] = "no_photo.png";
    }
    $watch[] = array("id" => $next['id'], "name" => $next['name'], "price" => $next['price'], "photo" => $next['photo']);

}
$smarty_cataloge=new Smarty;
$smarty_cataloge->assign("watch",$watch);
$smarty_cataloge->assign("num",1);
$content=$smarty_cataloge->fetch("cataloge.tpl");
require_once("main.php")
?>