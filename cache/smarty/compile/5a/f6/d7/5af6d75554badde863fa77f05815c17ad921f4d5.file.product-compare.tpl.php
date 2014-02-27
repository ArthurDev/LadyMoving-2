<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:29:20
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228535305caf03c9cb3-42582243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af6d75554badde863fa77f05815c17ad921f4d5' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\product-compare.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228535305caf03c9cb3-42582243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305caf03f4506_81043821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305caf03f4506_81043821')) {function content_5305caf03f4506_81043821($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
	var add_compare = '<?php echo smartyTranslate(array('s'=>'This product was added to comparison list','js'=>1),$_smarty_tpl);?>
';
	var remove_compare = '<?php echo smartyTranslate(array('s'=>'This product was removed from comparison list','js'=>1),$_smarty_tpl);?>
';
	var err_remove_compare = '<?php echo smartyTranslate(array('s'=>'Can not remove from comparison list','js'=>1),$_smarty_tpl);?>
';
//]]>
</script>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>