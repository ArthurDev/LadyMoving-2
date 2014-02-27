<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:45
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\leocmssticker\tmpl\default\_custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154665305c96593b041-03857769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80c2f944b28b1c88717e1d121df0c89da6851ce0' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\leocmssticker\\tmpl\\default\\_custom.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154665305c96593b041-03857769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_height' => 0,
    'show_title' => 0,
    'cmssticker_products' => 0,
    'startSlide' => 0,
    'item' => 0,
    'show_controls' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c965978873_72108966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c965978873_72108966')) {function content_5305c965978873_72108966($_smarty_tpl) {?><div id="cms_sticker" class="block col-md-6 col-xs-12" style="height:<?php echo $_smarty_tpl->tpl_vars['module_height']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_title']->value){?>
		<h3 class="title_specials"> 
			<span><?php echo smartyTranslate(array('s'=>'What People Say','mod'=>'leocmssticker'),$_smarty_tpl);?>
</span>
		</h3>
    <?php }?>
   
    <div class="carousel-inner">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cmssticker_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
        <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value){?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
    <?php } ?>   
    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_controls']->value&&count($_smarty_tpl->tpl_vars['cmssticker_products']->value)>1){?>
	<div class="control_buttons control-specials">
		<a class="carousel-control left" href="#cms_sticker" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-control right" href="#cms_sticker" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div>
    <?php }?>
</div>
<script type="text/javascript">


$(document).ready(function() {
    $('#cms_sticker').each(function(){
        $(this).carousel({
            pause: true,
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
	 
});


</script>
<?php }} ?>