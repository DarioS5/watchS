<?php
//вивод. обєднання
require_once("header.php");
$smarty_filtrSort=new Smarty();
$page="cataloge";
$query="Select id,name,price,photo from watch";
if(isset($_GET['sort']))
{
    $sort=$_GET['sort'];
    switch ($sort)
    {
        case "ASC":
            $sort="DESC";
            break;
        case "DESC":
            $sort="ASC";
            break;
        default:
        $sort="ASC";
        break;
    }
    $query=$query."ORDER BY price $sort";
    $smarty_filtrSort->assign("sort",$sort);
}
if(isset($_GET['id_cat'])&&!empty($_GET['id_cat']))
{
    $query="Select id,name,price,photo from  watch WHERE id_cat={$_GET['id_cat']} ORDER BY price $sort";
    $smarty_filtrSort->assign("id_cat",$_GET['id_cat']);
}
else{
    $query="Select id,name,price,photo from watch ORDER BY price $sort";
}
$rez=mysqli_query($dbc,$query) or die("query error");
$filtrSort=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $filtrSort[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
}
$smarty_filtrSort->assign("filtrSort",$filtrSort);
$smarty_filtrSort->assign("num","1");
$content=$smarty_filtrSort->fetch("filtr_sort.tpl");
require_once("main.php");
?>