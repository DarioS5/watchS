<?php
require_once("header.php");
$page="cataloge";
$zapis=3;
$queryZ="Select id from watch";
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
$query="Select id,name,price,photo from watch LIMIT $propusk,$zapis";
$rez=mysqli_query($dbc,$query) or die("query error");
$listalka=array();
while($next=mysqli_fetch_array($rez))
{
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $listalka[]=array("id"=>$next['id'],"name"=>$next['name'],"price"=>$next['price'],"photo"=>$next['photo']);
}
$pages=array();
for($i=1;$i<=$count_pages;$i++) {
    $pages[] = array("p" => $i);
}
$smarty_listalka=new Smarty();
$smarty_listalka->assign("active_page", $active_page);
$smarty_listalka->assign("count_pages",$count_pages);
$smarty_listalka->assign("pages",$pages);
$smarty_listalka->assign("listalka",$listalka);
$smarty_listalka->assign("num",1);
$content=$smarty_listalka->fetch("listalka.tpl");
require_once("main.php");
?>