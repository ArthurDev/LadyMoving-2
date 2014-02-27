<?php /*%%SmartyHeaderCode:2039409558530f49fe6c9a26-66111444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09f9de65330c268458bd8a2cabe3fb7cf317bac0' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanagewidgets/themes/leomanagewidgets.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039409558530f49fe6c9a26-66111444',
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
  'unifunc' => 'content_530f49fea4a5e3_08959837',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f49fea4a5e3_08959837')) {function content_530f49fea4a5e3_08959837($_smarty_tpl) {?><div id="homecontent-displayFootNav">
						<div class="leo-custom">
								
			</div>
			</div>
<script>
$(document).ready(function() {
    $('.carousel').each(function(){
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