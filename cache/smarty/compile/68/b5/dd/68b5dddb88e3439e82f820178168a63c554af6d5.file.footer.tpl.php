<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:46
         compiled from "C:\wamp\www\LadyMoving\modules\leocustomajax\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225025305c966bc2951-03286006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68b5dddb88e3439e82f820178168a63c554af6d5' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\modules\\leocustomajax\\footer.tpl',
      1 => 1392888076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225025305c966bc2951-03286006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leo_customajax_pn' => 0,
    'leo_customajax_rt' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_qv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c966bfcb06_52129072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c966bfcb06_52129072')) {function content_5305c966bfcb06_52129072($_smarty_tpl) {?><script type="text/javascript">
	var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_pn']->value;?>
<?php }else{ ?>0<?php }?>,
		productRating:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_rt']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_rt']->value;?>
<?php }else{ ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_img']->value;?>
<?php }else{ ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_tran']->value;?>
<?php }else{ ?>0<?php }?>,
		productQV:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_qv']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_qv']->value;?>
<?php }else{ ?>0<?php }?>
	}
    $(document).ready(function(){	
		var leoCustomAjax = new $.LeoCustomAjax();
        leoCustomAjax.processAjax();
    });
</script>
<?php }} ?>