<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 09:12:58
         compiled from "C:\wamp\www\LadyMoving\admin\themes\default\template\helpers\modules_list\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85995305c71ac5af39-04708153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122eb887b12c3afe03b73e80931f987799ced09c' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\admin\\themes\\default\\template\\helpers\\modules_list\\list.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85995305c71ac5af39-04708153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules_list' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c71ac8e291_92713250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c71ac8e291_92713250')) {function content_5305c71ac8e291_92713250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\LadyMoving\\tools\\smarty\\plugins\\function.counter.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\wamp\\www\\LadyMoving\\tools\\smarty\\plugins\\function.cycle.php';
?>

<h2 style="margin-top:0"><?php echo smartyTranslate(array('s'=>'Modules list'),$_smarty_tpl);?>
</h2>
<div id="modules_list_container_tab" class="default_modules_list_display_type">
	<ul id="modules_list_container_content">
		<?php if (count($_smarty_tpl->tpl_vars['modules_list']->value)){?>
			<li>
				<?php echo smarty_function_counter(array('start'=>1,'assign'=>"count"),$_smarty_tpl);?>

					<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>	
						<div style="width:400px"><?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",row alt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp1), 0);?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['count']->value%3==0){?>
			</li>
			<li>
						<?php }?>
					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

				<?php } ?>
			</li>
		<?php }else{ ?>
			<tr><td><div style="font-weight:700;margin-top:20px"><?php echo smartyTranslate(array('s'=>'No modules available in this section.'),$_smarty_tpl);?>
</b></td></tr>
		<?php }?>		
	</ul>
</div>
<div class="clear"></div><?php }} ?>