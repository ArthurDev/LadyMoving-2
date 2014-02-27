<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:21:50
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1530043981530f49fedf78e8-40476681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '942aeb355d3f5fc1546676eb98b1b2761125cfae' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1393422088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1530043981530f49fedf78e8-40476681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
    'PS_CATALOG_MODE' => 0,
    'order_process' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockuser_cart_flag' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f49ff2aceb2_39234332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f49ff2aceb2_39234332')) {function content_530f49ff2aceb2_39234332($_smarty_tpl) {?>

<!-- Block user information module HEADER -->
<ul id="header_user_info" class="links list-inline pull-left">
	<!--<li ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" ><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a>
	</li>-->
	<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><i class="fa fa-user"></i><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
		</li>
		<li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><i class="icon fa fa-heart"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Mes coups de coeur','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a>
		</li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><i class="fa fa-power-off"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Déconnexion','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a>
		</li>
	<?php }else{ ?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><i class="fa fa-lock"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Connexion','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a>
		</li>			
		
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><i class="fa fa-edit"></i><span class="hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Créer un compte','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a>
		</li>			
	<?php }?>
</ul>

<div id="header_user" class="<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>header_user_catalog<?php }?> pull-right">
	<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
		<ul id="header_nav" class="links list-inline">
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<i class="fa fa-shopping-cart"></i></a></li>
			<li id="shopping_cart">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<span id="cartText"><?php echo smartyTranslate(array('s'=>'Panier','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
				<!--<span class="<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>"> : </span>-->
				<span class="ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
				<span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
				<span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
				<!--<span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?>
						<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
							<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

						<?php }?>
					<?php }?>
				</span>
				<span class="ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
				-->
				</a>
			</li>
		</ul>		
	<?php }?>
</div> 
<div class="clear"></div>
<!-- /Block user information module HEADER -->
<?php }} ?>