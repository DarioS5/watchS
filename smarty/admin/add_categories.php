<?php
require_once("header.php");
if(!isset($_POST['send']))
{
    $smarty_add=new Smarty();
    $content=$smarty_add->fetch("add_categories.tpl");


}
else if(isset($_POST['send'],$_POST['name'])&&!empty($_POST['name']))
{
    $query="Insert into categories(name) value('{$_POST['name']}')";
    $rez=mysqli_query($dbc,$query);
    $content="ваші дані успішно додана";
}
else{
    $content="видалення відмінено або неможливо";
}

$smarty_main->assign("content","$content");
$smarty_main->assign("titl","сторінка додання категорії");
$smarty_main->display("main.tpl");
?>