<?php
require_once("header.php");
$page="cataloge";
$smarty_list=new Smarty();
$zapis=3;
if(isset($_GET['id_cat'])&&!empty($_GET['id_cat']))
{
    $queryZ="Select id from watch WHERE id_cat={$_GET['id_cat']}";
}
else {
    $queryZ = "Select id from watch";
}
$rezZ=mysqli_query($dbc,$queryZ) or die("query error");
$count_zapis=mysqli_num_rows($rezZ);
$count_pages=ceil($count_zapis/$zapis);
if(isset($_GET['page']))
{
    $active_page=$_GET['page'];
}
else{
    $active_page=1;
}
$propusk=($active_page-1)*$zapis;
if(isset($_GET['id_cat'])&&!empty($_GET['id_cat']))
{
    $query="Select id,name,price,photo from watch WHERE id_cat={$_GET['id_cat']} LIMIT $propusk,$zapis";
    $smarty_list->assign("id_cat",$_GET['id_cat']);
}
else{
    $query="Select id,name,price,photo from watch  LIMIT $propusk,$zapis";
}
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
    }
}
$query="Select id,name,price,photo from watch ORDER BY price $sort LIMIT $propusk,$zapis";
echo $query;
$rez=mysqli_query($dbc,$query) or die("query error");
$list=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $list[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
}
print_r($list);
$pages=array();
for($i=1;$i<=$count_pages;$i++)
{
    $pages[]=array("p"=>$i);
}
if($sort=="ASC")
{
    $sort1="DESC";
}
else{
    $sort1="ASC";
}
$smarty_list->assign("sort1",$sort1);
$smarty_list->assign("sort",$sort);
$smarty_list->assign("active_page",$active_page);
$smarty_list->assign("count_pages",$count_pages);
$smarty_list->assign("pages",$pages);
$smarty_list->assign("list",$list);
$smarty_list->assign("num",1);
$content=$smarty_list->fetch("listalka_sort_filrt.tpl");
require_once("main.php");
?>