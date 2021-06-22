<?php
/* Smarty version 3.1.36, created on 2021-05-17 10:42:45
  from 'E:\OpenServer\domains\smarty\admin\templates\edit_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60a21e753aa303_85521962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '462c986cd9429d4adcf51cbd6e1dd05a3526b17e' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\admin\\templates\\edit_cat.tpl',
      1 => 1616430803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a21e753aa303_85521962 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="edit_cat.php" method="post" enctype="multipart/form-data">
    <label>змініть назву категорії</label>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="редагувати">
</form><?php }
}
