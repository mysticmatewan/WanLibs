<?php
/* Smarty version 3.1.31, created on 2024-09-29 03:57:15
  from "E:\xampp\htdocs\wanlibs\private\Templates\admin\general\pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_66f8b3fbb0c505_02055484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c13f0f571203101104d7bfbb780fd06bb3fe4cbe' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wanlibs\\private\\Templates\\admin\\general\\pagination.tpl',
      1 => 1519054806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f8b3fbb0c505_02055484 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'E:\\xampp\\htdocs\\wanlibs\\private\\Smarty\\plugins\\block.t.php';
if (isset($_smarty_tpl->tpl_vars['pages']->value) && ($_smarty_tpl->tpl_vars['pages']->value != null && count($_smarty_tpl->tpl_vars['pages']->value) > 1)) {?>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                <li class="page-item<?php if ($_smarty_tpl->tpl_vars['page']->value->isCurrent()) {?> active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->getLink();?>
" class="page-link ajax-page">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value->isFirst()) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
First Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->isLast()) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->isNext()) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Next Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?><i class="fa fa-angle-left"></i><?php } else { ?><i class="fa fa-angle-right"></i><?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->isPrevious()) {?>
                            <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?><i class="fa fa-angle-right"></i><?php } else { ?><i class="fa fa-angle-left"></i><?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Previous Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>

                        <?php }?>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>
    </nav>
<?php }
}
}
