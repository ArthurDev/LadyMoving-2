<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:46
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\lofblogscategory\themes\default\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135825305c9665ec9e7-28925850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e04541da5ad6dbd340eb50c91e8b57a102c247b' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\lofblogscategory\\themes\\default\\default.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135825305c9665ec9e7-28925850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c96660e251_56210600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c96660e251_56210600')) {function content_5305c96660e251_56210600($_smarty_tpl) {?>
<div class="lofcontentmenu-wrapper block nobackground nopadding">
    <?php if ($_smarty_tpl->tpl_vars['params']->value['showTitle']){?>
        <h4 class="title_block"><a href="index.php?view=category&id=0&fc=module&module=lofblogs&controller=articles" title="<?php echo smartyTranslate(array('s'=>'All article','mod'=>'lofblogscategory'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>
</a></h4>
    <?php }?>    
    <div class="block_content tree">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['item']->value,'last'=>'true'), 0);?>

        <?php } ?>    
    </ul>
    </div>
</div><?php }} ?>