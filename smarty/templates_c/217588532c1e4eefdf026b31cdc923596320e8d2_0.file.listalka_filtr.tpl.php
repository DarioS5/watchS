<?php
/* Smarty version 3.1.36, created on 2021-05-11 10:05:03
  from 'E:\OpenServer\domains\smarty\templates\listalka_filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609a2c9f496409_72751112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217588532c1e4eefdf026b31cdc923596320e8d2' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\listalka_filtr.tpl',
      1 => 1620716702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a2c9f496409_72751112 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <td>№</td>
        <td>Фото</td>
        <td>Назва</td>
        <td>Ціна</td>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listalka_filtr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</th>
            <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['listalka_filtr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['listalka_filtr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['listalka_filtr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        </tr>
        <?php
}
}
?>
</table>
<table>
    <tr>
        <?php if ($_smarty_tpl->tpl_vars['active_page']->value == 1) {?>
            <td><<</td>
            <?php } else { ?>
            <td><a href="listalka_filtr.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>"> << </a></td>
            <?php }?>
        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p']) {?>
                <td><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
</td>
                <?php } else { ?>
                <td><a href="listalka_filtr.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
</a></td>
                <?php }?>
            <?php
}
}
?>
        <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_pages']->value) {?>
            <td> >> </td>
            <?php } else { ?>
            <td><a href="listalka_filtr.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>"> >> </a></td>
            <?php }?>
    </tr>
</table><?php }
}
