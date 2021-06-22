<?php
session_start();
define("SMARTY_LIB","../libs/");
require_once(SMARTY_LIB."Smarty.class.php");
$smarty_main=new Smarty();
require_once("param.php");
if(isset($_COOKIE['userid'],$_COOKIE['username'],$_COOKIE['userrole'],$_COOKIE['useravatar']))
{
    $_SESSION['userid']=$_COOKIE['userid'];
    $_SESSION['username']=$_COOKIE['username'];
    $_SESSION['userrole']=$_COOKIE['userrole'];
    $_SESSION['useravatar']=$_COOKIE['useravatar'];
    
}


?>