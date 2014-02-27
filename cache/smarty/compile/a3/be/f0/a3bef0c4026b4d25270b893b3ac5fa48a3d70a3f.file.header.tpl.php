<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 16:54:06
         compiled from "C:\wamp\www\Github\LadyMoving-2\themes\leoclot\layout\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24512530f5f9e807a84-01724437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3bef0c4026b4d25270b893b3ac5fa48a3d70a3f' => 
    array (
      0 => 'C:\\wamp\\www\\Github\\LadyMoving-2\\themes\\leoclot\\layout\\default\\header.tpl',
      1 => 1393509248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24512530f5f9e807a84-01724437',
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
  'unifunc' => 'content_530f5f9e869e25_84561850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f5f9e869e25_84561850')) {function content_530f5f9e869e25_84561850($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
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