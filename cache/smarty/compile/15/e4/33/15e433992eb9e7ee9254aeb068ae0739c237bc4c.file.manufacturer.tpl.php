<?php /* Smarty version Smarty-3.1.14, created on 2014-02-25 10:41:04
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22348530c65308c5bd8-91080008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e433992eb9e7ee9254aeb068ae0739c237bc4c' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\manufacturer.tpl',
      1 => 1392888046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22348530c65308c5bd8-91080008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530c65309c8f15_07268722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c65309c8f15_07268722')) {function content_530c65309c8f15_07268722($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\LadyMoving\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
	<h1><?php echo smartyTranslate(array('s'=>'List of products by manufacturer'),$_smarty_tpl);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value->name, 'htmlall', 'UTF-8');?>
</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
		<div class="description_box">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
				<p><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['manufacturer']->value->short_description), 'htmlall', 'UTF-8');?>
</p>
				<p class="hide_desc"><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['manufacturer']->value->description), 'htmlall', 'UTF-8');?>
</p>
				<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;"><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
			<?php }else{ ?>
				<p><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['manufacturer']->value->description), 'htmlall', 'UTF-8');?>
</p>
			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
		<div class="content_sortPagiBar">
			<div class="sortPagiBar row">
				<div class="col-xs-4 hidden-xs">
					<div class="inner">
					  <div class="btn-group" id="productsview">
						<span><?php echo smartyTranslate(array('s'=>'Display:'),$_smarty_tpl);?>
</span>
							<a title="<?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
" href="#" rel="view-grid"><i class="fa fa-th-large active" ></i></a>
							<a title="<?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
" href="#"  rel="view-list"><i class="fa fa-list-ul"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="inner ">
						<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

		
		<div class="sortPagiBar">  
					
				<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

					
			</div>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</p>
	<?php }?> 
<?php }?>
<?php }} ?>