<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:46
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\lofblogscategory\themes\default\category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28635305c966617d92-82928941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b88a29cfeab799424757ccf8054255683f4152c' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\lofblogscategory\\themes\\default\\category-tree-branch.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28635305c966617d92-82928941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c96665afd5_31715887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c96665afd5_31715887')) {function content_5305c96665afd5_31715887($_smarty_tpl) {?>

<li class="lvl<?php echo $_smarty_tpl->tpl_vars['node']->value['tree'];?>
">
    <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
" ><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a>
	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']){?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

			<?php }?>
		<?php } ?>
		</ul>
	<?php }?>
</li>
<?php }} ?>