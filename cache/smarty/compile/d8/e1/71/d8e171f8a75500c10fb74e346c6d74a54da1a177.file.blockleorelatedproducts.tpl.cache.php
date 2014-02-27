<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:23:09
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\blockleorelatedproducts\blockleorelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241035305c97da68326-29210534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e171f8a75500c10fb74e346c6d74a54da1a177' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\blockleorelatedproducts\\blockleorelatedproducts.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241035305c97da68326-29210534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c97da89d24_01317075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c97da89d24_01317075')) {function content_5305c97da89d24_01317075($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="relatedproducts" class="block products_block exclusive blockleorelatedproducts">		
	<h3 class="title_block"><?php echo smartyTranslate(array('s'=>'Related Products','mod'=>'blockleorelatedproducts'),$_smarty_tpl);?>
</h3>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leorelatedcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
		<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.blockleorelatedproducts .carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>