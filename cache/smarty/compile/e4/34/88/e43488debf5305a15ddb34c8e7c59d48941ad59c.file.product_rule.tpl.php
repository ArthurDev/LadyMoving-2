<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 09:12:51
         compiled from "C:\wamp\www\LadyMoving\admin\themes\default\template\controllers\cart_rules\product_rule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299705305c713a53c49-81799616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43488debf5305a15ddb34c8e7c59d48941ad59c' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\admin\\themes\\default\\template\\controllers\\cart_rules\\product_rule.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299705305c713a53c49-81799616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_rule_group_id' => 0,
    'product_rule_id' => 0,
    'product_rule_type' => 0,
    'product_rule_choose_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c713b0e5a5_42081133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c713b0e5a5_42081133')) {function content_5305c713b0e5a5_42081133($_smarty_tpl) {?><tr id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_tr">
	<td>
		<a href="javascript:removeProductRule(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
, <?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
);">
			<img src="../img/admin/disabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
" />
		</a>
	</td>
	<td>
		<input type="hidden" name="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['product_rule_id']->value;?>
" />
		<input type="hidden" name="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_rule_type']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		
		[<?php if ($_smarty_tpl->tpl_vars['product_rule_type']->value=='products'){?><?php echo smartyTranslate(array('s'=>'Products:'),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['product_rule_type']->value=='categories'){?><?php echo smartyTranslate(array('s'=>'Categories:'),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['product_rule_type']->value=='manufacturers'){?><?php echo smartyTranslate(array('s'=>'Manufacturers:'),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['product_rule_type']->value=='suppliers'){?><?php echo smartyTranslate(array('s'=>'Suppliers'),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['product_rule_type']->value=='attributes'){?><?php echo smartyTranslate(array('s'=>'Attributes'),$_smarty_tpl);?>
<?php }?>]
	</td>
	<td>
		<?php echo smartyTranslate(array('s'=>'The product(s) are matching on of these'),$_smarty_tpl);?>

	</td>
	<td>
		<input type="text" id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_match" value="" disabled="disabled" />
	</td>
	<td>
		<a id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_link" href="#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content">
			<img src="../img/admin/choose.gif" alt="<?php echo smartyTranslate(array('s'=>'Choose'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Choose'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'Choose'),$_smarty_tpl);?>

		</a>
		<div>
			<div id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content">
				<?php echo $_smarty_tpl->tpl_vars['product_rule_choose_content']->value;?>

			</div>
		</div>
	</td>
</tr>

<script type="text/javascript">
	$('#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content').parent().hide();
	$("#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_link").fancybox();
	$(document).ready(function() { updateProductRuleShortDescription($('#product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_add')); });
</script><?php }} ?>