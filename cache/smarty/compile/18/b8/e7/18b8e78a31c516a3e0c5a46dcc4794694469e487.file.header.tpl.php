<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:40:17
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/layout/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:694726549530f4e516a08a7-23721240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18b8e78a31c516a3e0c5a46dcc4794694469e487' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/layout/default/header.tpl',
      1 => 1393427892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '694726549530f4e516a08a7-23721240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f4e5180c8e6_77575105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f4e5180c8e6_77575105')) {function content_530f4e5180c8e6_77575105($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(3,9,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }elseif(empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,9,3), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }elseif(empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,12,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(3,6,3), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[0]){?>
<!-- Left -->
<aside id="left_column" class="column sidebar col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[0];?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</aside>
<?php }?>
<!-- Center -->
<section id="center_column" class="col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[1];?>
 col-sm-12 col-xs-12">
	<?php }} ?>