<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 15:07:26
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\blockwishlist\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18768530df51eeb2b78-03660394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e6bad47ab1c42452832d5f159dad12e2bded35' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\blockwishlist\\view.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18768530df51eeb2b78-03660394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'current_wishlist' => 0,
    'wishlist' => 0,
    'base_dir_ssl' => 0,
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'ajax' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530df51f13c423_45894364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530df51f13c423_45894364')) {function content_530df51f13c423_45894364($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\LadyMoving\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div id="view_wishlist">
<h1><?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['wishlists']->value){?>
<p>
	<?php echo smartyTranslate(array('s'=>'Other wishlists of','mod'=>'blockwishlist'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['current_wishlist']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['current_wishlist']->value['lastname'];?>
:
	<?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value){
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
		<?php if ($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist']!=$_smarty_tpl->tpl_vars['current_wishlist']->value['id_wishlist']){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/blockwishlist/view.php?token=<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['token'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>
</a>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>
				/
			<?php }?>
		<?php }?>
	<?php } ?>
</p>
<?php }?>

<div class="wlp_bought">
    <div class="clearfix wlp_bought_list row">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
            <div id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" class="col-md-4 col-sm-3 address <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index']%2){?>alternate_<?php }?>item">
                <div class="product-container">
                    <div class="image">
                        <a class="product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
" />
                        </a>
                    </div>
                    <div class="product_infos product-meta">
                        <h3 class="product_name"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), 'htmlall', 'UTF-8');?>
</h3>
						<span class="wishlist_product_detail">
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes_small'], 'htmlall', 'UTF-8');?>
</a>
                    <?php }?>
                        <br /><?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl);?>
:<input type="text" id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3"  />
                        <br /><br />
                        <?php echo smartyTranslate(array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl);?>
: 
                        <select id="priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
                            <option value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==0){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'High','mod'=>'blockwishlist'),$_smarty_tpl);?>
</option>
                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==1){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Medium','mod'=>'blockwishlist'),$_smarty_tpl);?>
</option>
                            <option value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==2){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Low','mod'=>'blockwishlist'),$_smarty_tpl);?>
</option>
                        </select>
                    </span>
                    </div>
                </div>
                <div class="btn_action">
                    <a class="button_small clear" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['attribute_quantity']>=1||!isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_quantity']>=1){?>
                        <?php if (!$_smarty_tpl->tpl_vars['ajax']->value){?>
                            <form id="addtocart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                                <p class="hidden">
                                    <input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" id="product_page_product_id"  />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
                                    <input type="hidden" name="id_product_attribute" id="idCombination" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" />
                                </p>
                            </form>
                        <?php }?>
                        <a href="javascript:;" class="exclusive" onclick="WishlistBuyProduct('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value, 'htmlall', 'UTF-8');?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', this, <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
);" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
                    <?php }else{ ?>
                        <span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                    <?php }?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</div>
<?php }} ?>