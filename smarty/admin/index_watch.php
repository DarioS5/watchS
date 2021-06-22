<?php
require_once("header.php");
if(isset($_POST['send'],$_POST['id_cat'])&&!empty($_POST['id_cat']))
{
    $query="Select id,photo,name from watch WHERE id_cat={$_POST['id_cat']}";
}
else {
    $query = "Select id,photo,name from watch";
}
$rez=mysqli_query($dbc,$query) or die("query error");
$watch=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $watch[]=array("id"=>$next['id'],"photo"=>$next['photo'],"name"=>$next['name']);
}
$smarty_index=new Smarty();
$query1="Select id,name from categories";
$rez1=mysqli_query($dbc,$query1) or die("query error1");
$cat=array();
while($next1=mysqli_fetch_array($rez1))
{
    $cat[]=array("id"=>$next1['id'],"name"=>$next1['name']);
}
//print_r($cat);
$smarty_index->assign("watch",$watch);
$smarty_index->assign("cat",$cat);
$smarty_index->assign("number","1");
$content=$smarty_index->fetch("index_watch.tpl");
$smarty_main->assign("content",$content);
$smarty_main->assign("title","управління товарами");
$smarty_main->display("main.tpl");
?>
