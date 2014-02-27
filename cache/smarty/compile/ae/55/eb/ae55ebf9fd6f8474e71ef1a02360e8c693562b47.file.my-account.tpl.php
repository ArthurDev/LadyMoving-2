<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 14:50:31
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29677530c7757c8af48-59939522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae55ebf9fd6f8474e71ef1a02360e8c693562b47' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\blockwishlist\\my-account.tpl',
      1 => 1393422629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29677530c7757c8af48-59939522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530c7757cd4181_59634968',
  'variables' => 
  array (
    'wishlist_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c7757cd4181_59634968')) {function content_530c7757cd4181_59634968($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo $_smarty_tpl->tpl_vars['wishlist_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<span class="fa fa-heart"></span>
		<?php echo smartyTranslate(array('s'=>'Mes coups de coeur','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>