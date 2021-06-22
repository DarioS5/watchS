<?php
/* Smarty version 3.1.36, created on 2021-04-06 10:46:05
  from 'E:\OpenServer\domains\smarty\admin\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_606c11bd5d5d74_57451291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1230e526d76bbd364429164aff6b7200516e3774' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\admin\\templates\\user.tpl',
      1 => 1617695156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606c11bd5d5d74_57451291 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="user.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Введіть імя"><br>
    <input type="text" name="email" placeholder="Введіть емейл"><br>
    <input type="text" name="phone" placeholder="Введіть тел"><br>
    <input type="text" name="login" placeholder="Введіть логін"><br>
    <input type="password" name="password" placeholder="Введіть пароль"><br>
    <input type="password" name="password1" placeholder="Повторіть пароль"><br>
    <label>оберіть права</label>
    <select name="role">
        <option value="2">Оператор</option>
        <option value="1">Адмін</option>
    </select>
    <label>Оберіть фото</label><br>
    <input type="file" name="photo"><br>
    <input type="submit" name="send" value="реєстрація">
</form><?php }
}
