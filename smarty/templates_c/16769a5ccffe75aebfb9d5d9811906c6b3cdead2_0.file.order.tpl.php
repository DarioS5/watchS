<?php
/* Smarty version 3.1.36, created on 2021-06-22 18:48:54
  from 'E:\OpenServer\domains\smarty\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60d206660988d9_11696391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16769a5ccffe75aebfb9d5d9811906c6b3cdead2' => 
    array (
      0 => 'E:\\OpenServer\\domains\\smarty\\templates\\order.tpl',
      1 => 1624376932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d206660988d9_11696391 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="order.php" method="post">

<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>К-сть</th>
        <th>Вартість</th>
        <th>X</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</th>
            <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><input type="number" name="amount" min="1" max="<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['max'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['amount'];?>
"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cost'];?>
</th>
            <th><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=dell&srcipt=order">X</a></th>
        </tr>
    <?php
}
}
?>
    <tr>
        <th colspan="5">всього до сплати</th>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['total_sum']->value;?>
</th>
    </tr>
    <tr>
        <th colspan="3"><a href="basket.php?mode=clear">очистить</a></th>
        <th colspan="4"><a href="order.php">замовити</a></th>
    </tr>
    <tr>
        <th colspan="7"><input type="submit" name="send" value="перерахувати"></th>
    </tr>
</table>
</form><?php }
}
