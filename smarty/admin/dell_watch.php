<?php
require_once("header.php");
if(isset($_GET['id'],$_GET['name'])&&!empty($_GET['id'])&&!empty($_GET['name']))
{
    $smarty_index=new Smarty();
    $smarty_index->assign("id",$_GET['id']);
    $smarty_index->assign("name",$_GET['name']);
    $content=$smarty_index->fetch("dell_watch.tpl");
}
else if(isset($_POST['send'],$_POST['id'],$_POST['dell'])&&!empty($_POST['id'])&&$_POST['dell']=="yes")
{
    $queryF="Select photo from watch WHERE id={$_POST['id']}";
    $rezF=mysqli_query($dbc,$queryF) or die("query error");
    $nextF=mysqli_fetch_array($rezF);
    if(!empty($nextF['photo']))
    {
        @unlink("../images/{$nextF['photo']}");
    }
    $query="Delete from watch WHERE id={$_POST['id']}";
    $rez=mysqli_query($dbc,$query) or die("query error");
    $content="ваші дані видалені";
}
else{
    $content="недостатньо даних дл видалення";
}
$smarty_main->assign("content",$content);
$smarty_main->assign("title","Видалення");
$smarty_main->display("main.tpl");
?>