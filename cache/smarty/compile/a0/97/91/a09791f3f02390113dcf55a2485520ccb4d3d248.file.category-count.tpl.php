<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:29:20
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137565305caf0393d04-41004555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09791f3f02390113dcf55a2485520ccb4d3d248' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\category-count.tpl',
      1 => 1392888045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137565305caf0393d04-41004555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305caf03bdf69_71588758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305caf03bdf69_71588758')) {function content_5305caf03bdf69_71588758($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>