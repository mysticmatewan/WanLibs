<?php
/* Smarty version 3.1.31, created on 2024-09-29 03:58:57
  from "E:\xampp\htdocs\wanlibs\themes\default\blog\posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_66f8b461004a67_52686942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4d975c1356426061abfe263984b7b7273a30ae9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wanlibs\\themes\\default\\blog\\posts.tpl',
      1 => 1519054816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_66f8b461004a67_52686942 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\xampp\\htdocs\\wanlibs\\private\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\xampp\\htdocs\\wanlibs\\private\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207490632966f8b460f1c664_62063363', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788415366f8b460f2d688_50059887', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125734216566f8b460f2ee75_17138723', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69770848366f8b460f30577_12800912', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_207490632966f8b460f1c664_62063363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_207490632966f8b460f1c664_62063363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {
echo $_smarty_tpl->tpl_vars['category']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['blog']->value->getMetaTitle();
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
if ($_smarty_tpl->tpl_vars['page']->value->isCurrent()) {
if ($_smarty_tpl->tpl_vars['page']->value->getTitle() != 1) {?> : Page #<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_788415366f8b460f2d688_50059887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_788415366f8b460f2d688_50059887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {
echo $_smarty_tpl->tpl_vars['category']->value->getMetaDescription();
} else {
echo $_smarty_tpl->tpl_vars['blog']->value->getMetaDescription();
}
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_125734216566f8b460f2ee75_17138723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_125734216566f8b460f2ee75_17138723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {
echo $_smarty_tpl->tpl_vars['category']->value->getMetaKeywords();
} else {
echo $_smarty_tpl->tpl_vars['blog']->value->getMetaKeywords();
}
}
}
/* {/block 'metaKeywords'} */
/* {block 'content'} */
class Block_69770848366f8b460f30577_12800912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69770848366f8b460f30577_12800912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="blog-posts">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
                        <h1><?php echo $_smarty_tpl->tpl_vars['category']->value->getTitle();?>
</h1>
                    <?php } else { ?>
                        <h1><?php echo $_smarty_tpl->tpl_vars['blog']->value->getSecondTitle();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
if ($_smarty_tpl->tpl_vars['page']->value->isCurrent()) {
if ($_smarty_tpl->tpl_vars['page']->value->getTitle() != 1) {?> : Page #<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</h1>
                    <?php }?>
                </div>
            </div>
            <div class="row">
                <?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && $_smarty_tpl->tpl_vars['posts']->value != null) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post', false, NULL, 'post', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                        <div class="col-lg-4 col-md-6">
                            <div class="post">
                                <div class="post-img">
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('small');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
">
                                        </a>
                                    <?php }?>
                                </div>
                                <div class="post-info">
                                    <div class="post-meta">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->getPublishDateTime(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                                    </div>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
" class="post-title">
                                        <h4><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h4>
                                    </a>
                                    <div class="post-short-description"><?php if ($_smarty_tpl->tpl_vars['post']->value->getShortDescription() != null) {
echo $_smarty_tpl->tpl_vars['post']->value->getShortDescription();
} else {
echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->getContent())),250);
}?></div>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php }?>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <?php $_smarty_tpl->_subTemplateRender("file:general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
