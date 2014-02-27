<?php /*%%SmartyHeaderCode:86965305c965a4eb08-12650901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65841a9a666eec89d6007990530ed5eabf863e62' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\leomanagewidgets\\themes\\leomanagewidgets.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86965305c965a4eb08-12650901',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530efdfff0d5e6_47511728',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530efdfff0d5e6_47511728')) {function content_530efdfff0d5e6_47511728($_smarty_tpl) {?><div id="homecontent-displayFooter">
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