<?php
/* Smarty version 3.1.36, created on 2021-04-27 09:14:36
  from 'E:\OpenServer\domains\smarty\templates\info_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6087abcca89428_73176436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336fa15ac1fbf94a522b3a8a00f48ea6f58efbb4' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\info_id.tpl',
      1 => 1619504075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087abcca89428_73176436 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>id</th>
        <th>Назва</th>
        <th>ціна</th>
        <th>опис</th>
        <th>к-сть</th>
        <th>Фото</th>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['full_discription']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['kolvo']->value;?>
</td>
        <td><img src="images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="100px"></td>
    </tr>
</table><?php }
}
