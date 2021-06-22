<?php
require_once("header.php");
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $query="Select name from categories WHERE id={$_GET['id']}";
    $rez=mysqli_query($dbc,$query) or die("query error");
    $next=mysqli_fetch_array($rez);
    $smarty_index = new Smarty();
    $smarty_index->assign("id", $_GET['id']);
    $smarty_index->assign("name", $next['name']);//витягуємо з бд
    $content = $smarty_index->fetch("edit_cat.tpl");
}
else if(isset($_POST['send'],$_POST['id'],$_POST['name'])&&!empty($_POST['id'])&&!empty($_POST['name']))
{
    $query="Update categories SET name='{$_POST['name']}' WHERE id={$_POST['id']}";
    echo $query;
    mysqli_query($dbc,$query) or die("query error");
    $content="ваші дані відредаговано";
}
else
    {
    $content="редагування відмінено";
}
$smarty_main->assign("content",$content);
$smarty_main->assign("title","редагування категорій");
$smarty_main->display("main.tpl");
?>