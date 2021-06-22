<?php
require_once("header.php");
$query="Select id,title from setting_page";
$rez=mysqli_query($dbc,$query) or die("query error");
$pages=array();
while($next=mysqli_fetch_array($rez))
{
    $pages[]=array("id"=>$next['id'],"title"=>$next['title']);
}
$smarty_index=new Smarty();
$smarty_index->assign("page",$pages);
$smarty_index->assign("namber",1);
$content=$smarty_index->fetch("index_page.tpl");//метод фетч компілює пхп і тпл файл і результат компіляції зберігає в змінну
$smarty_main->assign("content","$content");
$smarty_main->assign("titl","головна сторінка");


$smarty_main->display("main.tpl");


?>