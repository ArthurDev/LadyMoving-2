<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:19:25
         compiled from "C:\wamp\www\LadyMoving\adminLadyMoving\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277435305c89d972460-48387524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340baee36e5e8e6cea6233864cc4889c6ff19c24' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\adminLadyMoving\\themes\\default\\template\\footer.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277435305c89d972460-48387524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'ps_version' => 0,
    'timer_start' => 0,
    'iso_is_fr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c89d9a5cf2_99037002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c89d9a5cf2_99037002')) {function content_5305c89d9a5cf2_99037002($_smarty_tpl) {?>
			<div style="clear:both;height:0;line-height:0">&nbsp;</div>
		</div>
		<div style="clear:both;height:0;line-height:0">&nbsp;</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

			<div id="footer">
				<div class="footerLeft">
					<a href="http://www.prestashop.com/" target="_blank">PrestaShop&trade; <?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</a><br />
					<span><?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
<?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
				</div>
				<div class="footerRight">
					<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value){?>
						<span>Questions / Renseignements / Formations :</span> <strong>+33 (0)1.40.18.30.04</strong>
					<?php }?>
					|&nbsp;<a href="http://www.prestashop.com/en/contact-us?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://forge.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Bug Tracker'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://www.prestashop.com/forums/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Forum'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://addons.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Addons'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div id="ajax_confirmation" style="display:none"></div>
	<div id="ajaxBox" style="display:none"></div>
<?php }?>
	<div id="scrollTop"><a href="#top"></a></div>
</body>
</html><?php }} ?>