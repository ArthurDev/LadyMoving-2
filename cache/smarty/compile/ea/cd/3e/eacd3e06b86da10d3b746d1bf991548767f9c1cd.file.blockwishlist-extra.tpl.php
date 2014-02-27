<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 15:01:42
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\blockwishlist\blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323205305c97ddabbb1-44660867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eacd3e06b86da10d3b746d1bf991548767f9c1cd' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\blockwishlist\\blockwishlist-extra.tpl',
      1 => 1393423300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323205305c97ddabbb1-44660867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c97ddbcae1_69903995',
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c97ddbcae1_69903995')) {function content_5305c97ddbcae1_69903995($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a class="btn" href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" rel="nofollow"><span class="fa fa-heart"></span> <?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>