<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 17:30:17
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/modules/leocustomajax/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153406447530f6819f05185-83476065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bfc558dc0e0dc4b7642f87e0bd8859c184a4154' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/modules/leocustomajax/footer.tpl',
      1 => 1392888078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153406447530f6819f05185-83476065',
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
  'unifunc' => 'content_530f681a093ef4_45789128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f681a093ef4_45789128')) {function content_530f681a093ef4_45789128($_smarty_tpl) {?><script type="text/javascript">
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