<?php /*%%SmartyHeaderCode:2064872475530f4bab23b971-59619534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f3c31575bec87f9f10b185ee9f1cf843b7a823' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanagewidgets/themes/displayHome/leomanagewidgets.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064872475530f4bab23b971-59619534',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f4bad1ced33_25773895',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f4bad1ced33_25773895')) {function content_530f4bad1ced33_25773895($_smarty_tpl) {?><div id="homecontent-displayHome">
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