<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 09:13:06
         compiled from "C:\wamp\www\LadyMoving\themes\default\mobile\shopping-cart-gift-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43815305c72285bf91-70151872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d29c35f2373769b9bb62b8be0b70b30381070bc' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\default\\mobile\\shopping-cart-gift-line.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43815305c72285bf91-70151872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'link' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c72290b8f4_09189370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c72290b8f4_09189370')) {function content_5305c72290b8f4_09189370($_smarty_tpl) {?>

<input type="hidden" name="cart_product_id[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"/>
<input type="hidden" id="cart_product_attribute_id_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"/>
<input type="hidden" id="cart_product_address_delivery_id_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_address_delivery'];?>
"/>

<div class="fl width-20">
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" class="img_product_cart" />
</div>
<div class="fl width-60 padding-left-5px">
	<h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['reference']){?><p><?php echo smartyTranslate(array('s'=>'Ref:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
</p><?php }?>
	<p><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</p>
</div>
<div class="fl width-15" style="text-align:right">
	<p class="price" id="product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])){?>_gift<?php }?>" style="padding-top:20px">
		<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])){?>
			<h3 class="gift-icon" style="background-color:#0088CC;color:white;display:inline;padding:2px 14px;-webkit-border-radius:6px;border-radius:6px;font-weight:normal"><?php echo smartyTranslate(array('s'=>'Gift!'),$_smarty_tpl);?>
</h3>
		<?php }else{ ?>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']){?>
				<span style="text-decoration:line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']),$_smarty_tpl);?>
</span><br />
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	</p>
</div><?php }} ?>