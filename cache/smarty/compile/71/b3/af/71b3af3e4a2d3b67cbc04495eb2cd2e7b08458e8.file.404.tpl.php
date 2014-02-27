<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 17:04:59
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28978530627ab1fc5b7-03597025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b3af3e4a2d3b67cbc04495eb2cd2e7b08458e8' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\404.tpl',
      1 => 1392888045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28978530627ab1fc5b7-03597025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530627ab240fc9_75014878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530627ab240fc9_75014878')) {function content_530627ab240fc9_75014878($_smarty_tpl) {?>
<div class="pagenotfound">
	<h1><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>

	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<fieldset>
		
			<div class="input-group">
				<input id="search_query" class="form-control" name="search_query" type="text" />
				<span class="input-group-btn">                
					<input type="submit" name="Submit" value="OK" class="btn btn-default" />        
				</span>
			</div>

		</fieldset>
	</form>

	<p class="footer_links clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><span class="fa fa-home"></span> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></p>
</div><?php }} ?>