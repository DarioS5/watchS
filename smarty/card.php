<?php
require_once("header.php");
$page="cataloge";
$smarty_basket=new Smarty();
$zapis='3';
$queryZ="Select id from watch";
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
$query="Select id,name,kolvo,price,photo from watch LIMIT $propusk,$zapis";
$rez=mysqli_query($dbc,$query) or die("query error");
$card=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $card[]=array("id"=>$next['id'],"name"=>$next['name'],"kolvo"=>$next['kolvo'],"price"=>$next['price'],"photo"=>$next['photo']);
}
$pages=array();
for($i=1;$i<=$count_page;$i++)
{
    $pages[]=array("p"=>$i);
}
//print_r($basket);
$smarty_basket->assign("card",$card);
$smarty_basket->assign("count_page",$count_page);
$smarty_basket->assign("pages",$pages);
$smarty_basket->assign("active_page",$active_page);
$smarty_basket->assign("num",1);
$content=$smarty_basket->fetch("card.tpl");
require_once("main.php");
?>
