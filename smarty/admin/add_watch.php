<?php
require_once("header.php");
if(!isset($_POST['send']))
{
    $smarty_add=new Smarty();
    $query="Select id,name from categories";
    $rez=mysqli_query($dbc,$query) or die("query errror");
    $cat=array();
    while($next=mysqli_fetch_array($rez))
    {
        $cat[]=array("id"=>$next['id'],"name"=>$next['name']);
    }
    //print_r($cat);
    $smarty_add->assign("cat",$cat);
    $content=$smarty_add->fetch("add_watch.tpl");

}
else if(isset($_POST['send'],$_POST['meta_title'],$_POST['meta_description'],$_POST['meta_keybords'],$_POST['name'],$_POST['price'],$_POST['full_discription'],$_POST['kolvo'],$_POST['id_cat'])&&!empty($_POST['meta_title'])&&!empty($_POST['meta_description'])&&!empty($_POST['meta_keybords'])&&!empty($_POST['name'])&&!empty($_POST['price'])&&!empty($_POST['full_discription'])&&!empty($_POST['kolvo'])&&!empty($_POST['id_cat']))
{
    if($_FILES['photo']['error']==0)
    {
        $filenameTMP=$_FILES['photo']['tmp_name'];
        $filename=time().$_FILES['photo']['name'];
        move_uploaded_file($filenameTMP,"../images/$filename");
        $query="Insert into watch(meta_title,meta_description,meta_keybords,name,price,full_discription,kolvo,photo,id_cat) value('{$_POST['meta_title']}','{$_POST['meta_description']}','{$_POST['meta_keybords']}','{$_POST['name']}','{$_POST['price']}','{$_POST['full_discription']}','{$_POST['kolvo']}','$filename','{$_POST['id_cat']}')";
    }
    else
        {
            $query="Insert into watch(meta_title,meta_description,meta_keybords,name,price,full_discription,kolvo,id_cat) value('{$_POST['meta_title']}','{$_POST['meta_description']}','{$_POST['meta_keybords']}','{$_POST['name']}','{$_POST['price']}','{$_POST['full_discription']}','{$_POST['kolvo']}','{$_POST['id_cat']}')";
    }
    echo $query;
    $rez=mysqli_query($dbc,$query) or die("query error");
    $content="ваші дані додані";
}
else{
    $content="недостатньо даних для додання";
}

$smarty_main->assign("content","$content");
$smarty_main->assign("title","добавлення");
$smarty_main->display("main.tpl");
?>