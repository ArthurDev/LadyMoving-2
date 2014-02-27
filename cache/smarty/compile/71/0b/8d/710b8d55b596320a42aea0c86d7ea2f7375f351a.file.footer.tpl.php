<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 16:19:22
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177285305c9670036f6-66019575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '710b8d55b596320a42aea0c86d7ea2f7375f351a' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\layout\\default\\footer.tpl',
      1 => 1393427959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177285305c9670036f6-66019575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c96702d874_38418782',
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c96702d874_38418782')) {function content_5305c96702d874_38418782($_smarty_tpl) {?>			<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
				<div id="contentbottom" class="no-border clearfix block">
					<div class="row">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

					</div>
				</div>
			<?php }?>
	</section>
	<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2])&&$_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2]){?> 
	<!-- Right -->
	<aside id="right_column" class="column sidebar col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2];?>
 col-sm-12 col-xs-12">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

	</aside>
	<?php }?><?php }} ?>