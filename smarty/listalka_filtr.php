<?php
require_once("header.php");
$page="cataloge";
$listalka_filtr=array();
$smarty_listalkaFiltr=new Smarty();
$zapis=3;
if(isset($_GET['id_cat'])&&!empty($_GET['id_cat']))//перевіряємо якщо  в гет існує айді категорія і не пуста то відбираємо айді товарів які налеєать даній категорії від цього залежить розрахунок к-сті сторінок так як айді товарів в категорії менше чим товарів всього
{
    $queryZ = "Select id from watch WHERE id_cat={$_GET['id_cat']}";
}
else{
    $queryZ="Select id from watch";
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
$propusk=($active_page-1)*3;
if(isset($_GET['id_cat'])&&!empty($_GET['id_cat']))
{
    $query="Select id,name,price,photo from watch WHERE id_cat={$_GET['id_cat']}  LIMIT $propusk,$zapis";
    //$smarty_listalkaFiltr->assign("id_cat",$_GET['id_cat']);
    $smarty_listalkaFiltr->assign("id_cat",$_GET['id_cat']);
}
else{
    $query="Select id,name,price,photo from watch LIMIT $propusk,$zapis";
}
$rez=mysqli_query($dbc,$query) or die("query error");

while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no.png";
    }
    $listalka_filtr[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
    //print_r($listalka_filtr);
}
$pages=array();
for($i=1;$i<=$count_pages;$i++)
{
    $pages[]=array("p"=>$i);
}
$smarty_listalkaFiltr->assign("active_page",$active_page);
$smarty_listalkaFiltr->assign("count_pages",$count_pages);
$smarty_listalkaFiltr->assign("pages",$pages);
$smarty_listalkaFiltr->assign("listalka_filtr",$listalka_filtr);
$smarty_listalkaFiltr->assign("num",1);
$content=$smarty_listalkaFiltr->fetch("listalka_filtr.tpl");
require_once("main.php");
?>