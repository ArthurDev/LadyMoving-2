<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:23:09
         compiled from "C:\wamp\www\LadyMoving\modules\leocustomajax\quick_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63745305c97da19ab5-89964895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae3441666eff5f9d2673bb44b9d46fbd85d7ad6' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\modules\\leocustomajax\\quick_view.tpl',
      1 => 1392888076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63745305c97da19ab5-89964895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'on_ajaxcart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c97da47e43_30091107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c97da47e43_30091107')) {function content_5305c97da47e43_30091107($_smarty_tpl) {?><script type="text/javascript">
    $(document).ready(function(){
        $("body").addClass("quickview-wrapper");
        $("a, form").attr('target', '_parent');
        $("#short_description_block .buttons_bottom_block").remove();
        $(".quickview-wrapper #toolspanel").remove();
        $("#usefull_link_block").remove();
        if($("#relatedproducts").length) $("#relatedproducts").remove();
        
        <?php if ($_smarty_tpl->tpl_vars['on_ajaxcart']->value){?>$('p#add_to_cart input').unbind('click').click(function(e){
                e.stopImmediatePropagation();
                return parent.quickViewAddToCart( $('#product_page_product_id').val(), $('#idCombination').val(), $('#quantity_wanted').val());
        });
        <?php }else{ ?>
        $('p#add_to_cart input').unbind('click').click(function(e){
                e.stopImmediatePropagation();
                return true;
        });
        <?php }?>
    });
</script><?php }} ?>