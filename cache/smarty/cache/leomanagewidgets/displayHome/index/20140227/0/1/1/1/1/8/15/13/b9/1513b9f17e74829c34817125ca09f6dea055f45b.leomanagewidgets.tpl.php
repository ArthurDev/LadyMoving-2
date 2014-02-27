<?php /*%%SmartyHeaderCode:11969530f5f9e1f8f88-44338892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1513b9f17e74829c34817125ca09f6dea055f45b' => 
    array (
      0 => 'C:\\wamp\\www\\Github\\LadyMoving-2\\themes\\leoclot\\modules\\leomanagewidgets\\themes\\displayHome\\leomanagewidgets.tpl',
      1 => 1393509251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11969530f5f9e1f8f88-44338892',
  'variables' => 
  array (
    'hook' => 0,
    'leomanagewidgets_datas' => 0,
    'datas' => 0,
    'content' => 0,
    'carousel_product_tpl' => 0,
    'tab_product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f5f9e2f1620_98869926',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f5f9e2f1620_98869926')) {function content_530f5f9e2f1620_98869926($_smarty_tpl) {?><div id="homecontent-displayHome">
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