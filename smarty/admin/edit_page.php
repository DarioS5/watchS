<?php
require_once("header.php");
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $query="Select meta_title,meta_description,meta_keybords,title,full_content from setting_page WHERE id=".$_GET['id'];
    $rez=mysqli_query($dbc,$query) or die("query error");
    $next=mysqli_fetch_array($rez);
    $smarty_edit=new Smarty();
    $smarty_edit->assign("meta_title",$next['meta_title']);
    $smarty_edit->assign("meta_description",$next['meta_description']);
    $smarty_edit->assign("meta_keybords",$next['meta_keybords']);
    $smarty_edit->assign("title",$next['title']);
    $smarty_edit->assign("full_content",$next['full_content']);
    $smarty_edit->assign("id",$_GET['id']);
    $content=$smarty_edit->fetch("edit_page.tpl");
}
else if(isset($_POST['send'],$_POST['id'],$_POST['meta_title'],$_POST['meta_description'],$_POST['meta_keyborbs'],$_POST['title'],$_POST['full_content'])&&!empty($_POST['meta_title'])&&!empty($_POST['meta_description'])&&!empty($_POST['title'])&&!empty($_POST['meta_keyborbs'])&&!empty("full_content"))
{
    $query="Update setting_page SET meta_title='{$_POST['meta_title']}', meta_description='{$_POST['meta_description']}', meta_keybords='{$_POST['meta_keyborbs']}', title='{$_POST['title']}', full_content='{$_POST['full_content']}' WHERE id={$_POST['id']}";
    //echo $query;
    mysqli_query($dbc,$query) or die("query error");
    $content="ваші дані успішно відредаговані";
}
else
{
    $content="нудостатньо даних для редагування";
}

$smarty_main->assign("content","$content");
$smarty_main->assign("title","головна сторінка");
$smarty_main->display("main.tpl");
?>