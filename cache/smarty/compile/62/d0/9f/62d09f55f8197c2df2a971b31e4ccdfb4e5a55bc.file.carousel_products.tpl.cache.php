<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:21:49
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanagewidgets/themes/carousel_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:848580262530f49fdbb0b75-17909922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d09f55f8197c2df2a971b31e4ccdfb4e5a55bc' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanagewidgets/themes/carousel_products.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848580262530f49fdbb0b75-17909922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mproducts' => 0,
    'datas' => 0,
    'tabname' => 0,
    'products' => 0,
    'columnspage' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f49fe37d3d1_78693682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f49fe37d3d1_78693682')) {function content_530f49fe37d3d1_78693682($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/LadyMoving-2/tools/smarty/plugins/modifier.escape.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['mproducts']->value)){?>
<?php $_smarty_tpl->tpl_vars['itemsperpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['datas']->value['configs']['itemspage'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['columnspage'] = new Smarty_variable($_smarty_tpl->tpl_vars['datas']->value['configs']['columns'], null, 0);?>
<div class="carousel slide" id="<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-carousel">
	 <?php if (count($_smarty_tpl->tpl_vars['mproducts']->value)>1){?>	
	<a class="carousel-control left" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-carousel"   data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-carousel"  data-slide="next">&rsaquo;</a>
	<?php }?>
	<div class="carousel-inner">
	<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value){
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['products']->index++;
 $_smarty_tpl->tpl_vars['products']->first = $_smarty_tpl->tpl_vars['products']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['products']->first;
?>
		<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']){?>active<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
				  <div class="row product-block ">
				<?php }?>
				<div class="<?php if ($_smarty_tpl->tpl_vars['columnspage']->value==5){?>leo-md-<?php echo $_smarty_tpl->tpl_vars['columnspage']->value;?>
<?php }else{ ?>col-md-<?php echo $_smarty_tpl->tpl_vars['datas']->value['scolumn'];?>
<?php }?> col-sm-6 col-xs-6 ajax_block_product">
					<div class="product-container">
						<div class="image">
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class="product_img_link " title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">						
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" class="img-responsive img" />
								<span class="product-additional" rel="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"></span>
							</a>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><span><?php echo smartyTranslate(array('s'=>'New','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span></span><?php }?>
							
							<div class="product_bottom hidden-xs">								
								<a class="quick-view" title="<?php echo smartyTranslate(array('s'=>'Quick View','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" href="<?php if (strpos($_smarty_tpl->tpl_vars['product']->value['link'],"?")){?><?php echo smarty_modifier_escape(($_smarty_tpl->tpl_vars['product']->value['link']).('&content_only=1'), 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape(($_smarty_tpl->tpl_vars['product']->value['link']).('?content_only=1'), 'htmlall', 'UTF-8');?>
<?php }?>">
									<i class="fa fa-search-plus"></i>
									 </a>
							</div>
						</div>
						
						<div class="product-meta">
							<div class="warp-info">
								<h3 class="name"><?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']){?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), 'htmlall', 'UTF-8');?>
</a></h3>
								
								<div class="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>
</div>
								<a class="rating_box leo-rating-<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="#" rel="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" style="display:none">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>      
								</a>
								<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
									<div class="content_price">
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
										<span class="price">
											<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
										</span>
										<?php }?>	
									</div>
								<?php }?>
							</div>
							<div class="product-btn">
								<div class="cart">
									<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
										<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
											<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)){?>
												<a class="btn ajax_add_to_cart_button exclusive" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
												<i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span></a>
											<?php }else{ ?>
												<a class="btn ajax_add_to_cart_button exclusive" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp2,false), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
												<i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span></a>
											<?php }?>
										<?php }else{ ?>
											<span class="exclusive btn out-of-stock"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span></span>
										<?php }?>
									<?php }?>	
								</div>
								<div class="wishlist">
									<a href="#" id="wishlist_button<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="btn btn-add-wishlist btn" onclick="LeoWishlistCart('wishlist_block_list', 'add', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', $('#idCombination').val(), 1 ); return false;"><i class="fa fa-heart"></i></a>
								</div>
								<div class="view">
									<a class="btn lnk_more" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
"><i class=" fa fa-eye"></i></a>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				
				<?php if (($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
					</div>
				<?php }?>
					
				<?php } ?>
		</div>		
	<?php } ?>
	</div>
</div>
<?php }?><?php }} ?>