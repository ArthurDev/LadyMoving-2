<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 12:51:53
         compiled from "C:\wamp\www\LadyMoving\adminLadyMoving\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92675305ec5904f1f0-11833955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805d69dda09133170999c107a7511439dc9e0ad8' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\adminLadyMoving\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92675305ec5904f1f0-11833955',
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
  'unifunc' => 'content_5305ec5905d280_92367997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305ec5905d280_92367997')) {function content_5305ec5905d280_92367997($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>