<?php
require_once("header.php");
$smarty_sort=new Smarty();
$page="cataloge";
$query="Select id,name,price,photo from watch";
if(isset($_GET['sort1']))
{
    $sort1=$_GET['sort1'];
    switch ($sort1)
    {
        case "ASC":
            $sort1="DESC";
            break;
        case "DESC":
            $sort1="ASC";
        default:
            $sort1= "ASC";
            break;
    }
    $query=$query." ORDER BY price $sort1";
    $smarty_sort->assign("sort1",$sort1);
}
$rez=mysqli_query($dbc,$query) or die("query error");
$sort=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $sort[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
}

$smarty_sort->assign("sort",$sort);
$smarty_sort->assign("num","1");
$content=$smarty_sort->fetch("sort.tpl");
require_once("main.php");
?>