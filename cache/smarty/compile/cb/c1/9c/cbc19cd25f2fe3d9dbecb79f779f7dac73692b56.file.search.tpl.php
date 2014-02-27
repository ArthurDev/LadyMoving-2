<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 14:46:42
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26291530607420bd0f4-49119297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc19cd25f2fe3d9dbecb79f779f7dac73692b56' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\search.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26291530607420bd0f4-49119297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instantSearch' => 0,
    'nbProducts' => 0,
    'search_query' => 0,
    'search_tag' => 0,
    'ref' => 0,
    'search_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530607421b4f59_51409720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530607421b4f59_51409720')) {function content_530607421b4f59_51409720($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\LadyMoving\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 <?php if (isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&$_smarty_tpl->tpl_vars['instantSearch']->value){?>id="instant_search_results"<?php }?>>
<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value>0){?>"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }elseif($_smarty_tpl->tpl_vars['search_tag']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_tag']->value, 'htmlall', 'UTF-8');?>
<?php }elseif($_smarty_tpl->tpl_vars['ref']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ref']->value, 'htmlall', 'UTF-8');?>
<?php }?>"<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&$_smarty_tpl->tpl_vars['instantSearch']->value){?><a href="#" class="close"><?php echo smartyTranslate(array('s'=>'Return to the previous page'),$_smarty_tpl);?>
</a><?php }?>
</h1>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['nbProducts']->value){?>
	<p class="warning">
		<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }?>"
		<?php }elseif(isset($_smarty_tpl->tpl_vars['search_tag']->value)&&$_smarty_tpl->tpl_vars['search_tag']->value){?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_tag']->value, 'htmlall', 'UTF-8');?>
"
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Please enter a search keyword'),$_smarty_tpl);?>

		<?php }?>
	</p>
<?php }else{ ?>
	<h3 class="nbresult"><span class="big"><?php if ($_smarty_tpl->tpl_vars['nbProducts']->value==1){?><?php echo smartyTranslate(array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }?></span></h3>
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
					<?php if (!isset($_smarty_tpl->tpl_vars['instantSearch']->value)||(isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&!$_smarty_tpl->tpl_vars['instantSearch']->value)){?>
						<div class="col-xs-8">
							<div class="inner  ">
								<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</div>
						</div>
					<?php }?>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['search_products']->value), 0);?>

			<?php if (!isset($_smarty_tpl->tpl_vars['instantSearch']->value)||(isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&!$_smarty_tpl->tpl_vars['instantSearch']->value)){?>
			<div class="sortPagiBar">  
					
				<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

					
			</div>
		<?php }?>
<?php }?>
<?php }} ?>