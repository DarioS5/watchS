<?php
require_once("header.php");
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $query="Select meta_title,meta_description,meta_keybords,name,price,full_discription,kolvo,photo,id_cat from watch WHERE id={$_GET['id']}";
    $rez=mysqli_query($dbc,$query) or die("query error");
    $next=mysqli_fetch_array($rez);
    if(empty($next['photo']))
    {
        $next['photo']="no_photo.png";
    }
    $queryM="Select id,name from categories";
    $rezM=mysqli_query($dbc,$queryM) or die("query error");
    $cat=[];
    while($nextM=mysqli_fetch_array($rezM))
    {
        $cat[]=array("id"=>$nextM['id'],"name"=>$nextM['name']);
    }
    $smarty_index=new Smarty();
    $smarty_index->assign("cat",$cat);
    $smarty_index->assign("id",$_GET['id']);
    $smarty_index->assign("meta_title",$next['meta_title']);
    $smarty_index->assign("meta_description",$next['meta_description']);
    $smarty_index->assign("meta_keybords",$next['meta_keybords']);
    $smarty_index->assign("name",$next['name']);
    $smarty_index->assign("price",$next['price']);
    $smarty_index->assign("full_discription",$next['full_discription']);
    $smarty_index->assign("kolvo",$next['kolvo']);
    $smarty_index->assign("photo",$next['photo']);
    $smarty_index->assign("id_cat",$next['id_cat']);
    $content=$smarty_index->fetch("edit_watch.tpl");
}
else if(isset($_POST['send'],$_POST['id'],$_POST['meta_title'],$_POST['meta_description'],$_POST['meta_keybords'],$_POST['name'],$_POST['price'],$_POST['full_discription'],$_POST['kolvo'],$_POST['id_cat'])&&!empty($_POST['id'])&&!empty($_POST['meta_title'])&&!empty($_POST['meta_description'])&&!empty($_POST['meta_keybords'])&&!empty($_POST['name'])&&!empty($_POST['price'])&&!empty($_POST['full_discription'])&&!empty($_POST['kolvo']&&!empty($_POST['id_cat'])))
{
    if ($_FILES['newphoto']['error'] == 0)
    {
        if (isset($_POST['oldphoto']) && $_POST['oldphoto'] != "no.png")
        {
            @unlink("../images/" . $_POST['oldphoto']);
        }
        $filenameTMP = $_FILES['newphoto']['tmp_name'];
        $filename = time().$_FILES['newphoto']['name'];
        move_uploaded_file("$filenameTMP", "../images/$filename");
        $query = "Update watch SET meta_title='{$_POST['meta_title']}', meta_description='{$_POST['meta_description']}', meta_keybords='{$_POST['meta_keyborbs']}', name='{$_POST['name']}', price='{$_POST['price']}', full_discription='{$_POST['full_discription']}', kolvo='{$_POST['kolvo']}', photo='{$filename}' WHERE id={$_POST['id']}";
    }
    else {
        $query = "Update watch SET meta_title='{$_POST['meta_title']}', meta_description='{$_POST['meta_description']}', meta_keybords='{$_POST['meta_keyborbs']}', name='{$_POST['name']}', price='{$_POST['price']}', full_discription='{$_POST['full_discription']}', kolvo='{$_POST['kolvo']}'";
    }
    echo $query;
        mysqli_query($dbc, $query) or die("query error");
        $content = "Ваші дані успішно відредаговані";
}
else
    {
    $content = "редагування відмінено";
}
$smarty_main->assign("content",$content);
$smarty_main->assign("title","редагування товару");
$smarty_main->display("main.tpl");
?>