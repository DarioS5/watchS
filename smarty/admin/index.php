<?php
require_once("header.php");//обовязково для кожної сторінки
if(isset($_SESSION['userid'],$_SESSION['username'],$_SESSION['userrole'],$_SESSION['useravatar'])) {
$smarty_main->assign("useid",$_SESSION['userid']);
$smarty_main->assign("username",$_SESSION['username']);
$smarty_main->assign("userrole",$_SESSION['userrole']);
$smarty_main->assign("useravatar",$_SESSION['useravatar']);

    $content = "для початку роботи в адмін частині виберіть необхідний пункт меню";
    $smarty_main->assign("content", "$content");//обовязково для кожної сторінки
    $smarty_main->assign("titl", "головна сторінка");//обовязково для кожної сторінки

    $smarty_main->display("main.tpl");//обовязково для кожної сторінки
}
else{
    header("location:4040.html");
}
?>