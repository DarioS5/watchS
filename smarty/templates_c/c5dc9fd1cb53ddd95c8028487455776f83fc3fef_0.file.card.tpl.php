<?php
/* Smarty version 3.1.36, created on 2021-06-14 10:36:54
  from 'E:\OpenServer\domains\smarty\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c70716df9ca6_93052109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5dc9fd1cb53ddd95c8028487455776f83fc3fef' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\card.tpl',
      1 => 1623656213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c70716df9ca6_93052109 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
        <tr>
            <td>№</td>
            <td>Фото</td>
            <td>Назва</td>
            <td>К-сть</td>
            <td>Купить</td>
            <td>Ціна</td>

        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['card']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</th>
                <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['card']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></th>
                <th><?php echo $_smarty_tpl->tpl_vars['card']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['card']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
</th>
                <th><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['card']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=add&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
">купить</a></th>
                <th><?php echo $_smarty_tpl->tpl_vars['card']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
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
            <td> << </td>
            <?php } else { ?>
            <td><a href="card.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;?>
"> << </a></td>
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
            <td><a href="card.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
</a></td>
            <?php }?>
        <?php
}
}
?>
        <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_page']->value) {?>
            <td> >> </td>
            <?php } else { ?>
            <td><a href="card.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;?>
"> >> </a></td>
            <?php }?>

    </tr>
</table>
<?php }
}
