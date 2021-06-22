<?php
require_once("header.php");
if(isset($_GET['id'],$_GET['name'])&&!empty($_GET['id'])&&!empty($_GET['name']))
{
 $smarty_index=new Smarty();
 $smarty_index->assign("id",$_GET['id']);
 $smarty_index->assign("name",$_GET['name']);
 $content=$smarty_index->fetch("dell_cat.tpl");
}
else if(isset($_POST['send'],$_POST['id'],$_POST['dell'])&&!empty($_POST['id'])&&$_POST['dell']=="yes")
{
    $query="Delete from categories WHERE id={$_POST['id']}";
    $rez=mysqli_query($dbc,$query) or die("query error");
    $content="ваші дані успішно видалені";
}
    else
    {
        $content="нудостатньо даних для видалення";
    }
$smarty_main->assign("content",$content);
$smarty_main->assign("title","Видалення");
$smarty_main->display("main.tpl");
?>