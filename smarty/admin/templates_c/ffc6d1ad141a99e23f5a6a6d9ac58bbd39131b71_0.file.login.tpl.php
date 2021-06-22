<?php
/* Smarty version 3.1.36, created on 2021-04-12 15:56:58
  from 'E:\OpenServer\domains\smarty\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6074439a2190b4_39799972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc6d1ad141a99e23f5a6a6d9ac58bbd39131b71' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\admin\\templates\\login.tpl',
      1 => 1617695443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6074439a2190b4_39799972 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:#82C6E0">
<H1 style="text-align: center">Авторизація</H1>
<div style="text-align: center">
    <form action="login.php" method="post" enctype="multipart/form-data">
        <input type="text" name="login" placeholder="Введіть логін"><br>
        <input type="password" name="password" placeholder="Введіть пароль"><br>
        <input type="submit" name="send" value="Вхід">
    </form>
    </div>
<H4 style="color: darkred;"><?php if ((isset($_smarty_tpl->tpl_vars['content']->value)) && !empty($_smarty_tpl->tpl_vars['content']->value)) {
echo $_smarty_tpl->tpl_vars['content']->value;
}?></H4><!-- перевіряємо якщо підставляються дані в контент то ми їх показуємо-->

</body>
</html><?php }
}
