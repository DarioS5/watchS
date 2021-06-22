<?php
require_once("header.php");
if(isset($_SESSION['userid'],$_SESSION['username'],$_SESSION['userrole'],$_SESSION['useravatar'])) {
    $smarty_main->assign("userid",$_SESSION['userid']);
    $smarty_main->assign("username",$_SESSION['username']);
    $smarty_main->assign("userrole",$_SESSION['userrole']);
    $smarty_main->assign("useravatar",$_SESSION['useravatar']);

    $query = "Select id,name from categories";
    $rez = mysqli_query($dbc, $query) or die("query error");
    $cat = array();
    while ($next = mysqli_fetch_array($rez)) {
        $cat[] = array("id" => $next['id'], "name" => $next['name']);
    }
    $smarty_index = new Smarty();
    $smarty_index->assign("cat", $cat);
    $smarty_index->assign("number", "1");
    $content = $smarty_index->fetch("index_cat.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->assign("title", "управління категоріями");
    $smarty_main->display("main.tpl");
}
else{
    header("location:404.html");
}
?>