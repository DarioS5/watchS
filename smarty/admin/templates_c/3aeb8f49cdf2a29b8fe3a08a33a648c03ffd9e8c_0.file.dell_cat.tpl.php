<?php
/* Smarty version 3.1.36, created on 2021-05-03 16:55:29
  from 'E:\OpenServer\domains\smarty\admin\templates\dell_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609000d1ad2af2_86959394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aeb8f49cdf2a29b8fe3a08a33a648c03ffd9e8c' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\admin\\templates\\dell_cat.tpl',
      1 => 1615881243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609000d1ad2af2_86959394 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="dell_cat.php" method="post" enctype="multipart/form-data">
    <h1>ви дійсно хочете видалити<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
    <input type="radio" name="dell" value="yes" checked>yes
    <input type="radio" name="dell" value="no">no
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
