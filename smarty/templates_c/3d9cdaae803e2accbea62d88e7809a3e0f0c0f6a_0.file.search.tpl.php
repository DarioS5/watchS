<?php
/* Smarty version 3.1.36, created on 2021-06-08 09:44:56
  from 'E:\OpenServer\domains\smarty\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf11e8ae9f01_51272552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9cdaae803e2accbea62d88e7809a3e0f0c0f6a' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\search.tpl',
      1 => 1623134691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf11e8ae9f01_51272552 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['status']->value)) && $_smarty_tpl->tpl_vars['status']->value == 1) {?>
<table border="1">
    <tr>
        <td>№</td>
        <td>Фото</td>
        <td>Назва</td>
        <td>Ціна</td>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['search']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</th>
            <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        </tr>
        <?php
}
}
?>
</table>
<?php } else { ?>
<div>Немає даних</div>
<?php }
}
}
