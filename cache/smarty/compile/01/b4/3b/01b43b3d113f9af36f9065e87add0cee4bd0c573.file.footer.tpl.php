<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 17:30:19
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1560171877530f681b3087c4-71125268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01b43b3d113f9af36f9065e87add0cee4bd0c573' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/footer.tpl',
      1 => 1392916402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560171877530f681b3087c4-71125268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'HOOK_BOTTOM' => 0,
    'page_name' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTNAV' => 0,
    'LEO_PANELTOOL' => 0,
    'LEO_PATTERN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f681b47f9a3_18348246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f681b47f9a3_18348246')) {function content_530f681b47f9a3_18348246($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div></div></section>

<!-- Footer -->
			<?php if ($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
			<section id="bottom">
				<div class="container">
					<div class="row">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>
 
					</div>
				</div>
			</section>
			<?php }?>
			<footer id="footer" class="clearfix">
				<section id="footer-top" class="footer">
					<div class="top_footer"></div>
					<div class="container"> 
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
 
					</div>
				</section>	
				<section id="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="copyright col-md-6 col-xs-12">
									Lady Moving Massy - Copyright 2014 - Tous droits réservés
									<br />
									Géré et développé par <a href="#" style="cursor:default;">Ecom Planet</a>
							</div>

							<?php if ($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value){?>
								<div class="footnav col-md-6 col-xs-12"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>
</div>
							<?php }?>
						</div>
					</div>
				</section>
				
			</footer>
		</section>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value){?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
	<script type="text/javascript">
		var classBody = "<?php echo $_smarty_tpl->tpl_vars['LEO_PATTERN']->value;?>
";
		$("body").addClass( classBody.replace(/\.\w+$/,"")  );
					
		$('.title_specials').each(function(){
			var me = $(this);
			me.html( me.text().replace(/(^\w+|\s+\w+)/,'<span class="tcolor">$1</span>') );
		});		
	</script>
	</body>
</html>
<?php }} ?>