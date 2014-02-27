<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 14:57:59
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\prices-drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24968530609e7dab391-41035348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0cb54feba270ec23a0a64b45d44536d548f2e9' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\prices-drop.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24968530609e7dab391-41035348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530609e7e024e7_66079281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530609e7e024e7_66079281')) {function content_530609e7e024e7_66079281($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<div class="content_sortPagiBar">
		<div class="sortPagiBar row">
			<div class="col-xs-4  hidden-xs">
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
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No price drop'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>