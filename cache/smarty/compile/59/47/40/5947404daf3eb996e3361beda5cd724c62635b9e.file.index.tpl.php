<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 09:13:03
         compiled from "C:\wamp\www\LadyMoving\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205305305c71f6491d0-70682488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5947404daf3eb996e3361beda5cd724c62635b9e' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\default\\mobile\\index.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205305305c71f6491d0-70682488',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c71f652cd9_95718825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c71f652cd9_95718825')) {function content_5305c71f652cd9_95718825($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>