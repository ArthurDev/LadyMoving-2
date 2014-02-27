<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:19:49
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/adminLadyMoving/themes/default/template/helpers/help_access/button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1234796083530f49859d6a88-19109457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78e4e2b2157322268dd1ecd497b3e268d6cce50' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/adminLadyMoving/themes/default/template/helpers/help_access/button.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234796083530f49859d6a88-19109457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'help_base_url' => 0,
    'iso_lang' => 0,
    'version' => 0,
    'doc_version' => 0,
    'country' => 0,
    'tooltip' => 0,
    'button_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f4985b31f05_55251988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f4985b31f05_55251988')) {function content_530f4985b31f05_55251988($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/LadyMoving-2/tools/smarty/plugins/modifier.escape.php';
?><li class="help-context-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'htmlall', 'UTF-8');?>
" style="display:none">
    <a id="desc-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'htmlall', 'UTF-8');?>
-help"
       class="toolbar_btn"
       href="#"
       onclick="showHelp('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['help_base_url']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iso_lang']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['version']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['doc_version']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['country']->value, 'htmlall', 'UTF-8');?>
');"
        title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tooltip']->value, 'htmlall', 'UTF-8');?>
">
        <span class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['button_class']->value, 'htmlall', 'UTF-8');?>
"></span>
        <div><?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
</div>
    </a>
</li>
<?php }} ?>