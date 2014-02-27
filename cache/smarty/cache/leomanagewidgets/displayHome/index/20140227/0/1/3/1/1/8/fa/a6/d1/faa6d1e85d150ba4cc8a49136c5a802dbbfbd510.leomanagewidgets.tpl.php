<?php /*%%SmartyHeaderCode:110835305c9668d6538-30405859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa6d1e85d150ba4cc8a49136c5a802dbbfbd510' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\leomanagewidgets\\themes\\displayHome\\leomanagewidgets.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110835305c9668d6538-30405859',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530efdfaa83373_04210061',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530efdfaa83373_04210061')) {function content_530efdfaa83373_04210061($_smarty_tpl) {?><div id="homecontent-displayHome">
						<div class="leo-carousel clearfix">
									<div id="blockleohighlightcarousel-featured" class="block products_block exclusive highlighted blockleohighlightcarousel">
					<div class="block_content">	
						<div class="highlight-carousel">
							<div class="highlight-image">
												 		
																			<h3 class="title_block"></h3>
																	
							</div>
						
																
						</div>
					</div>
										</div>
							</div>
			</div>
<script>
$(document).ready(function() {
    $('#homecontent-displayHome').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	$(".blockleoproducttabs").each( function(){
		$(".nav-tabs li", this).first().addClass("active");
		$(".tab-content .tab-pane", this).first().addClass("active");
	} );
});
</script><?php }} ?>