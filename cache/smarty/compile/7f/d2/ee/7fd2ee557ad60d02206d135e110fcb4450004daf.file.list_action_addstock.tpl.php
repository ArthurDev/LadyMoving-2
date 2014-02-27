<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 09:12:58
         compiled from "C:\wamp\www\LadyMoving\admin\themes\default\template\helpers\list\list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300545305c71a29a964-84708175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd2ee557ad60d02206d135e110fcb4450004daf' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\admin\\themes\\default\\template\\helpers\\list\\list_action_addstock.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300545305c71a29a964-84708175',
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
  'unifunc' => 'content_5305c71a2a8cd7_05893223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c71a2a8cd7_05893223')) {function content_5305c71a2a8cd7_05893223($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>