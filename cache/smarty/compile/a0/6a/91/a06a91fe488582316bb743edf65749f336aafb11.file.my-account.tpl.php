<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 14:29:45
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16930530c7757d26683-44072279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a06a91fe488582316bb743edf65749f336aafb11' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\my-account.tpl',
      1 => 1393421356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16930530c7757d26683-44072279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530c7757df5445_00420891',
  'variables' => 
  array (
    'account_created' => 0,
    'has_customer_an_address' => 0,
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_CUSTOMER_ACCOUNT' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c7757df5445_00420891')) {function content_530c7757df5445_00420891($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)){?>
	<p class="success">
		<?php echo smartyTranslate(array('s'=>'Your account has been created.'),$_smarty_tpl);?>

	</p>
<?php }?>
<p class="title_block"><?php echo smartyTranslate(array('s'=>'Welcome to your account. Here you can manage al of your personal information and orders. '),$_smarty_tpl);?>
</p>
<div id="links">
<ul class="myaccount_lnk_list bolded">
	<?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value){?>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
"><span class="fa fa-book"></span><?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><span class="fa fa-shopping-cart"></span><?php echo smartyTranslate(array('s'=>'Order history and details '),$_smarty_tpl);?>
</a></li>
	<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value){?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><span class="fa fa-reply-all"></span><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><span class="fa fa-file-text"></span> <?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>
</a></li>

</ul>

<ul class="myaccount_lnk_list bolded">
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><span class="fa fa-book"></span><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><span class="fa fa-pencil"></span><?php echo smartyTranslate(array('s'=>'My personal information'),$_smarty_tpl);?>
</a></li>
	<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value){?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><span class="fa fa-tag"></span><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value;?>

</ul>
</div>
<p class="footer_links clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><span class="fa fa-home"></span><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></p>
<?php }} ?>