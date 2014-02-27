<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:40:17
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/layout/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1324063212530f4e5191b968-73350495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc4b2c838f3a51aa29ba3fe3a17b90914bb8a25' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/layout/default/footer.tpl',
      1 => 1393427960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1324063212530f4e5191b968-73350495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f4e519cf2f9_00926509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f4e519cf2f9_00926509')) {function content_530f4e519cf2f9_00926509($_smarty_tpl) {?>			<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
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