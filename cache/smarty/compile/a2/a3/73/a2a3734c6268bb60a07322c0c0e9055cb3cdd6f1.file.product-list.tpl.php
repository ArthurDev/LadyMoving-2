<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 15:24:05
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137715305caf0551040-70552487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2a3734c6268bb60a07322c0c0e9055cb3cdd6f1' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\product-list.tpl',
      1 => 1393424643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137715305caf0551040-70552487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305caf07e04a1_48158056',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305caf07e04a1_48158056')) {function content_5305caf07e04a1_48158056($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\LadyMoving\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)){?>
	<!-- Products list -->
	<div id="product_list" class="clearfix">
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
		<?php if (Configuration::get('productlistcols')>1&&($_smarty_tpl->tpl_vars['product']->iteration%Configuration::get('productlistcols')==1)){?>
			<div class="clearfix  product-block row">
		<?php }?>
			<div class="col-md-<?php echo (12/Configuration::get('productlistcols'));?>
 ajax_block_product <?php if (($_smarty_tpl->tpl_vars['product']->iteration%Configuration::get('productlistcols')!=0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last'])){?>
			last-item <?php }?>">
				<div class="product-container">
					<div class="image">
						
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class=" product_img_link" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">						
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" class="img img-responsive" />
															
								<span class="product-additional" rel="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"></span>
							</a> 
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><span><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span></span><?php }?>
							
						<div class="product_bottom hidden-xs">								
							<a class="quick-view" title="<?php echo smartyTranslate(array('s'=>'Quick View'),$_smarty_tpl);?>
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
							<div class="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),240,'...');?>
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
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span><?php }?>
								</div>
								<div class="attr-product-list">								
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
									<span class="availability">
										<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
											<?php echo smartyTranslate(array('s'=>'Available'),$_smarty_tpl);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)){?>
											<?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

										<?php }else{ ?>
										<span class="warning_inline">
											<?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

										</span>
										<?php }?>
									</span>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']){?><span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span><?php }?>
								</div>
							<?php }?>
							<div class="attr-product-list">
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
									<span class="on_sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</span>
								<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
									<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
								<?php }?>
							</div>
						</div>
						<div class="product-btn">
							<div class="cart">							
							<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
								<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
									<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)){?>
										<a class="btn ajax_add_to_cart_button exclusive" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
">
											<i class="fa fa-shopping-cart"></i>
											<span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span></a>
									<?php }else{ ?>
										<a class="btn ajax_add_to_cart_button exclusive" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp2,false), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
">
											<i class="fa fa-shopping-cart"></i>
											<span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span></a>
									<?php }?>						
								<?php }else{ ?>
									<span class="exclusive btn out-of-stock"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
</span></span>
								<?php }?>
							<?php }?>
							</div>
							<div class="wishlist">							
								 <a href="#" id="wishlist_button<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist'),$_smarty_tpl);?>
" class="btn-add-wishlist btn" onclick="LeoWishlistCart('wishlist_block_list', 'add', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', $('#idCombination').val(), 1 ); return false;"><i class="fa fa-heart"></i></a>
							</div>
							<div class="compare">
							<a class="btn" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">&nbsp;<i class=" fa fa-eye"></i></a>
							</div> 
					</div>
					</div>
					
					
				</div>
			</div>
		<?php if (Configuration::get('productlistcols')>1&&($_smarty_tpl->tpl_vars['product']->iteration%Configuration::get('productlistcols')==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last'])){?>
			</div>
		<?php }?>
	<?php } ?>
	</div>
	<!-- /Products list -->
<?php }?>
<?php }} ?>