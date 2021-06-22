<?php
/* Smarty version 3.1.36, created on 2021-05-03 16:55:12
  from 'E:\OpenServer\domains\smarty\admin\templates\edit_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609000c0bb5146_79234053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a35eb45a7b303920f18ad2ddf0fd355e8c0f9fd' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\admin\\templates\\edit_page.tpl',
      1 => 1614082935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609000c0bb5146_79234053 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="edit_page.php" enctype="multipart/form-data"><!-- з гет працюють тільки посилки і як виключення працює форма пошуку
з пост працюють в основному форми тим більше коли форма передає файл або коли є поле пароля-->
    <label>відредагуйте поле заголовка для просування сайту в інтернет</label><br>
    <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea><br>
    <label>відредагуйте опис сайту для просунення в інет</label><br>
    <textarea name="meta_description"><?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
</textarea><br>
    <label>відредагуйте ключові слова для просунення сайту в інет</label><br>
    <textarea name="meta_keyborbs"><?php echo $_smarty_tpl->tpl_vars['meta_keybords']->value;?>
</textarea><br>
    <label>відредагуйте назву сторінки</label><br>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
    <label>відредагуйте зміст сторінки</label><br>
    <textarea name="full_content"><?php echo $_smarty_tpl->tpl_vars['full_content']->value;?>
</textarea><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><br>
    <input type="submit" name="send" value="відредагуйте">
</form><?php }
}
