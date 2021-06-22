<?php
/* Smarty version 3.1.36, created on 2021-05-18 09:31:09
  from 'E:\OpenServer\domains\smarty\templates\listalka_sort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60a35f2d046e80_94989170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f0a6d2f5bbb51c7c99d1fc0a30957de4e0b078' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\listalka_sort.tpl',
      1 => 1621319467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a35f2d046e80_94989170 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <td>№</td>
        <td>Назва</td>
        <td>Фото</td>
        <td><a href="listalka_sort.php?&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
&sort=<?php if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {
echo $_smarty_tpl->tpl_vars['sort']->value;
}?>">Ціна</td>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listalka_sort']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['listalka_sort']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><img src="images/<?php echo $_smarty_tpl->tpl_vars['listalka_sort']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['listalka_sort']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
        </tr>
    <?php
}
}
?>
</table>
<table>
    <tr>
    <?php if ($_smarty_tpl->tpl_vars['active_page']->value == 1) {?>
        <td> << </td>
        <?php } else { ?>
        <td><a href="listalka_sort.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort1']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
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
                <td><a href="listalka_sort.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];
if ((isset($_smarty_tpl->tpl_vars['ia_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort1']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
</a></td>
            <?php }?>
            <?php
}
}
?>
        <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_page']->value) {?>
            <td> >> </td>
            <?php } else { ?>
            <td><a href="listalka_sort.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort1']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}?>"> >> </a></td>
            <?php }?>
    </tr>
</table><?php }
}
