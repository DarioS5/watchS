<?php
require_once("header.php");
if(!isset($_POST['send']))
{
    $smarty_main->assign("content","");
}

 else if(isset($_POST['send'],$_POST['login'],$_POST['password'])&&!empty($_POST['login'])&&!empty($_POST['password']))
{
    $query="Select id,name,role,avatar from user WHERE login='{$_POST['login']}' AND password=sha1('{$_POST['password']}')";
    $rez=mysqli_query($dbc,$query) or die("query error");
    if(mysqli_num_rows($rez)===1)
    {
        $next=mysqli_fetch_array($rez);
        $_SESSION['userid']=$next['id'];
        $_SESSION['username']=$next['name'];
        $_SESSION['userrole']=$next['userrole'];
        $_SESSION['useravatar']=$next['useravatar'];
        setcookie("userid",$next['id'],time()+60*60*2);
        setcookie("username",$next['name'],time()+60*60*2);
        setcookie("userrole",$next['role'],time()+60*60*2);
        setcookie("useravatar",$next['avatar'],time()+60*60*2);
        $smarty_main->assign("content","вхід успішний");
        header("refresh:3;url=index.php");
    }
    else
    {
        $smarty_main->assign("content","невіріний логін або апроль");
        header("refresh:3;url=login.php");
    }
}
else{
    $smarty_main->assign("content","недостатньо даних для входу");
    header("refresh:3;url=login.php");
}
$smarty_main->assign("title","авторизація");
$smarty_main->display("login.tpl");
?>