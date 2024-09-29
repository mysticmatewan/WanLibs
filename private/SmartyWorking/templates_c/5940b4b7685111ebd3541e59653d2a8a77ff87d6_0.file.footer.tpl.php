<?php
/* Smarty version 3.1.31, created on 2024-09-29 03:58:41
  from "E:\xampp\htdocs\wanlibs\themes\default\general\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_66f8b451e002b0_85784693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5940b4b7685111ebd3541e59653d2a8a77ff87d6' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wanlibs\\themes\\default\\general\\footer.tpl',
      1 => 1519054816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f8b451e002b0_85784693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>
</p>
            </div>
        </div>
    </div>
</footer>
<button class="back-to-top" id="back-to-top" role="button"><i class="ti-angle-up"></i></button><?php }
}
