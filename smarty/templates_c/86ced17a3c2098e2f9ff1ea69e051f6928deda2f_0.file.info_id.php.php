<?php
/* Smarty version 3.1.36, created on 2021-04-26 16:46:11
  from 'E:\OpenServer\domains\smarty\info_id.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6086c42350b440_44673602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ced17a3c2098e2f9ff1ea69e051f6928deda2f' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\info_id.php',
      1 => 1619444740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6086c42350b440_44673602 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
require_once("header.php");
$page="cataloge";
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    $smarty_cataloge=new Smarty();
    $query="Select meta_title,meta_description,meta_keybords,name,price,full_discription,kolvo,photo,id_cat from watch WHERE id=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
";
    $rez=mysqli_query($dbc,$query) or die("query error");
    $next=mysqli_fetch_array($rez);
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
    $content=$smarty_cataloge->fetch("info_id.php");
}
else{
    $content="нежостатньо даних для виводу";
}
require_once("main.php");
<?php echo '?>';
}
}
