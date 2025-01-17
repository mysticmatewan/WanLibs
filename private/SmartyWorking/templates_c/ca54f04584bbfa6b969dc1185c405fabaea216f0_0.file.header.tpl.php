<?php
/* Smarty version 3.1.31, created on 2024-09-29 03:56:15
  from "E:\xampp\htdocs\wanlibs\private\Templates\admin\general\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_66f8b3bf448752_17919811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca54f04584bbfa6b969dc1185c405fabaea216f0' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wanlibs\\private\\Templates\\admin\\general\\header.tpl',
      1 => 1519054806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/languageSelector.tpl' => 1,
  ),
),false)) {
function content_66f8b3bf448752_17919811 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'E:\\xampp\\htdocs\\wanlibs\\private\\Smarty\\plugins\\block.t.php';
?>
<header class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("adminIndex");?>
">
                <b>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/logo-icon.png" alt="logo"/>
                </b>
                <span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" alt="logo"/>
                </span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-auto<?php } else { ?>mr-auto<?php }?> mt-md-0 ">
                <li class="nav-item">
                    <a class="nav-link nav-toggler d-md-none text-muted" href="javascript:void(0)"><i class="icon-menu" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler d-none d-md-block text-muted" href="javascript:void(0)"><i class="icon-menu" aria-hidden="true"></i></a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 200) {?>
                    <li class="nav-item d-none d-md-block">
                        <div class="search-header">
                            <div class="input-group">
                                <input type="text" class="form-control header-search-input" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Search<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" name="searchText">
                                <select name="searchBy" id="searchBy">
                                    <option value="books"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
By Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="users"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
By Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                </select>
                                <span class="input-group-btn">
                                <a class="search-btn btn btn-outline-default" id="search-book"><i class="fa header-search-icon fa-search"></i></a>
                            </span>
                            </div>
                            <ul class="header-search-results"></ul>
                        </div>
                    </li>
                <?php }?>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicIndex");?>
" target="_blank"><i class="icon-screen-desktop"></i></a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </a>
                        <div class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?> animated bounceIn">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getId() != null) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
" class="dropdown-item"><i class="icon-user mr-2"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Profile<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </a>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("adminLogout");?>
" class="dropdown-item"><i class="icon-power mr-2"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Logout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </a>
                        </div>
                    </li>
                <?php }?>
                <li class="nav-item dropdown">
                    <?php $_smarty_tpl->_subTemplateRender('file:admin/general/languageSelector.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </li>
            </ul>
        </div>
    </nav>
</header><?php }
}
