<?php /*%%SmartyHeaderCode:29582530f5f9d710274-66504537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32758a8ed847235e394bbdb4088b1f31912c6e80' => 
    array (
      0 => 'C:\\wamp\\www\\Github\\LadyMoving-2\\themes\\leoclot\\modules\\leomanagewidgets\\themes\\leomanagewidgets.tpl',
      1 => 1393509251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29582530f5f9d710274-66504537',
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
  'unifunc' => 'content_530f5f9d80b3b9_21514467',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f5f9d80b3b9_21514467')) {function content_530f5f9d80b3b9_21514467($_smarty_tpl) {?><div id="homecontent-displayFootNav">
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