<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 09:13:05
         compiled from "C:\wamp\www\LadyMoving\themes\default\mobile\pages-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155295305c7217ca087-48605798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00de9af386781a7c5419bc4562a73feb1ed0fda' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\default\\mobile\\pages-list.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155295305c7217ca087-48605798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c721824726_51381400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c721824726_51381400')) {function content_5305c721824726_51381400($_smarty_tpl) {?>

		<hr/>
		<h2 class="site_map"><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
</h2>
		<ul data-role="listview" data-inset="true" id="category">
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='index'){?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false">Accueil</a></li><?php }?>
			
			
			
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(3,false), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false">IPod</a></li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(4,false), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false">Accessoires</a></li>
			
			
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='my-account'){?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='contact'){?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a></li><?php }?>
		</ul>
<?php }} ?>