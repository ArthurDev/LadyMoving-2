<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:19:45
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/adminLadyMoving/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:944964668530f498195ab71-79207085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f937ac5eb5df7429fbf4e109a39bdd7b4810773' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/adminLadyMoving/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944964668530f498195ab71-79207085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f498199e6b8_39889546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f498199e6b8_39889546')) {function content_530f498199e6b8_39889546($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>