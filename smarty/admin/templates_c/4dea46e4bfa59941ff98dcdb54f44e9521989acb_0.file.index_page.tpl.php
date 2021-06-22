<?php
/* Smarty version 3.1.36, created on 2021-04-13 09:43:28
  from 'E:\OpenServer\domains\smarty\admin\templates\index_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60753d9069b855_43510063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dea46e4bfa59941ff98dcdb54f44e9521989acb' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\admin\\templates\\index_page.tpl',
      1 => 1613573419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60753d9069b855_43510063 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>список сторінок</h3>
<table border="1">
    <tr><th>№</th>
        <th>назва</th>
        <th>редагувати</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['namber']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</td>
            <td><a href="edit_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">редагувати</a></td>
        </tr>
    <?php
}
}
?>
</table><?php }
}
