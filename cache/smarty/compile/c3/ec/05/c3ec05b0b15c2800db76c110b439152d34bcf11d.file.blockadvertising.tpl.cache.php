<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:46
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143525305c96612c5f4-85688372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3ec05b0b15c2800db76c110b439152d34bcf11d' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143525305c96612c5f4-85688372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c966142596_74308728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c966142596_74308728')) {function content_5305c966142596_74308728($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block block freestyle nopadding nobackground">
	<div class="block_content">
		<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" /></a>
	</div>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>