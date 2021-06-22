<?php
require_once("header.php");
$page="cataloge";
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $smarty_cataloge=new Smarty();
    $query="Select meta_title,meta_description,meta_keybords,name,price,full_discription,kolvo,photo,id_cat from watch WHERE id={$_GET['id']}";
    $rez=mysqli_query($dbc,$query) or die("query error");
    $next=mysqli_fetch_array($rez);
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $smarty_cataloge->assign("id",$_GET['id']);
    $meta_title=$next['meta_title'];//
    $meta_description=$next['meta_description'];
    $meta_keybords=$next['meta_keybords'];
    $smarty_cataloge->assign("name",$next['name']);
    $smarty_cataloge->assign("price",$next['price']);
    $smarty_cataloge->assign("full_discription",$next['full_discription']);
    $smarty_cataloge->assign("kolvo",$next['kolvo']);
    $smarty_cataloge->assign("photo",$next['photo']);
    $smarty_cataloge->assign("id_cat",$next['id_cat']);
    $content=$smarty_cataloge->fetch("info_id.tpl");
}
else{
    $content="нежостатньо даних для виводу";
}
require_once("main.php");
?>