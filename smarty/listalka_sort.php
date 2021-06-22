<?php
require_once("header.php");
$page="cataloge";
$smarty_listalkaSort=new Smarty();
$zapis=3;
$queryZ="Select id from watch ";
$rezZ=mysqli_query($dbc,$queryZ) or die("query error");
$count_zapis=mysqli_num_rows($rezZ);
$count_page=ceil($count_zapis/$zapis);
if(isset($_GET['page']))
{
    $active_page=$_GET['page'];
}
else{
    $active_page=1;
}
$propusk=($active_page-1)*$zapis;
if(isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    switch ($sort) {
        case "ASC":
            $sort = "DESC";
            break;
        case "DESC":
            $sort = "ASC";
            break;
        default:
            $sort = "ASC";
            break;
    }
}
//echo $sort;
$query="Select id,name,price,photo from watch ORDER BY price $sort LIMIT $propusk,$zapis";


    //$query=$query."ORDER BY price $sort";

echo $query;
$rez=mysqli_query($dbc,$query) or die("query error");
$listalka_sort=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }

    $listalka_sort[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);

}
$pages=array();
for($i=1;$i<=$count_page;$i++)
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
$smarty_listalkaSort->assign("$sort1",$sort1);
//print_r($listalka_sort);
$smarty_listalkaSort->assign("sort",$sort);
$smarty_listalkaSort->assign("listalka_sort",$listalka_sort);
$smarty_listalkaSort->assign("active_page",$active_page);
$smarty_listalkaSort->assign("count_page",$count_page);
$smarty_listalkaSort->assign("pages",$pages);
$smarty_listalkaSort->assign("num",1);
$content=$smarty_listalkaSort->fetch("listalka_sort.tpl");
require_once("main.php");
?>