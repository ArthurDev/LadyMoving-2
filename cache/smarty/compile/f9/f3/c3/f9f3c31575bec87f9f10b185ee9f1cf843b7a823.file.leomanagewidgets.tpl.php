<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 17:06:24
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanagewidgets/themes/displayHome/leomanagewidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1318946079530f6280acc286-25251750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f3c31575bec87f9f10b185ee9f1cf843b7a823' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanagewidgets/themes/displayHome/leomanagewidgets.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1318946079530f6280acc286-25251750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook' => 0,
    'leomanagewidgets_datas' => 0,
    'datas' => 0,
    'content' => 0,
    'carousel_product_tpl' => 0,
    'tab_product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f62810bdc48_12309307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f62810bdc48_12309307')) {function content_530f62810bdc48_12309307($_smarty_tpl) {?>
<div id="homecontent-<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leomanagewidgets_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
$_smarty_tpl->tpl_vars['datas']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['datas']->value['task']=='custom'){?>
			<div class="leo-<?php echo $_smarty_tpl->tpl_vars['datas']->value['task'];?>
 hidden-sm hidden-xs clearfix">
				<?php if ($_smarty_tpl->tpl_vars['datas']->value['configs']['display_title']){?><h3><?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
</h3><?php }?>
				<?php echo $_smarty_tpl->tpl_vars['datas']->value['contents'];?>

			</div>
		<?php }elseif($_smarty_tpl->tpl_vars['datas']->value['task']=='carousel'){?>
			<div class="leo-<?php echo $_smarty_tpl->tpl_vars['datas']->value['task'];?>
 clearfix">
				<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
					<div id="blockleohighlightcarousel-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" class="block products_block exclusive highlighted blockleohighlightcarousel">
					<div class="block_content">	
						<div class="highlight-carousel">
							<div class="highlight-image">
												 		
									<?php if ($_smarty_tpl->tpl_vars['datas']->value['configs']['display_title']){?>
										<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
</h3>
									<?php }?>
								
							</div>
						
									<?php if (!empty($_smarty_tpl->tpl_vars['content']->value['products'])){?>
										<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['products'], null, 0);?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['id'], null, 0);?>
										<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['carousel_product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }?>
							
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['datas']->value['description']){?><div class="highlight-info"><?php echo $_smarty_tpl->tpl_vars['datas']->value['description'];?>
</div><?php }?>
					</div>
				<?php } ?>
			</div>
		<?php }elseif($_smarty_tpl->tpl_vars['datas']->value['task']=='tab'){?>
			<div class="leo-<?php echo $_smarty_tpl->tpl_vars['datas']->value['task'];?>
 block products_block exclusive blockleoproducttabs clearfix">
				<?php if ($_smarty_tpl->tpl_vars['datas']->value['configs']['display_title']){?>
					<h3><?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
</h3>
				<?php }?>
			
										
					<ul id="productTabs-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
" class="nav nav-tabs">
					<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['content']->value['products']){?>
							<li><a href="#leotab-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" data-toggle="tab"><?php if ($_smarty_tpl->tpl_vars['content']->value['image']){?><img src="<?php echo $_smarty_tpl->tpl_vars['content']->value['image'];?>
" alt=""/><?php }?><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</a></li>
						<?php }?>
					<?php } ?>
					</ul>
				
				
				<div id="productTabsContent-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
" class="tab-content">
					<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['content']->value['products']){?>
							<div class="tab-pane" id="leotab-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
">
								<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['products'], null, 0);?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['id'], null, 0);?>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tab_product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</div>
						<?php }?>
					<?php } ?>
				</div>
			</div>
		<?php }?>
	<?php } ?>
</div>
<script>
$(document).ready(function() {
    $('#homecontent-<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	$(".blockleoproducttabs").each( function(){
		$(".nav-tabs li", this).first().addClass("active");
		$(".tab-content .tab-pane", this).first().addClass("active");
	} );
});
</script><?php }} ?>