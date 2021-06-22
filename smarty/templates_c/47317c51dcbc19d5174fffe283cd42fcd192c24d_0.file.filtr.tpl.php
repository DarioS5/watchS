<?php
/* Smarty version 3.1.36, created on 2021-04-27 09:40:31
  from 'E:\OpenServer\domains\smarty\templates\filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6087b1df886ce4_63694565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47317c51dcbc19d5174fffe283cd42fcd192c24d' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\filtr.tpl',
      1 => 1619505629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087b1df886ce4_63694565 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>назва</th>
        <th>ціна</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['watch']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
    <td><img src="images/<?php echo $_smarty_tpl->tpl_vars['watch']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></td>
    <td><?php echo $_smarty_tpl->tpl_vars['watch']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['watch']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
</tr>
<?php
}
}
?>
</table><?php }
}
