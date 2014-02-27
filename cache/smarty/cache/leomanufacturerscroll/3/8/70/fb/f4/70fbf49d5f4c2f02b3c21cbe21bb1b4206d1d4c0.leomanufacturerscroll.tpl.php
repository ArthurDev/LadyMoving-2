<?php /*%%SmartyHeaderCode:136595305c9659ad7d4-59569572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70fbf49d5f4c2f02b3c21cbe21bb1b4206d1d4c0' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\leomanufacturerscroll\\leomanufacturerscroll.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136595305c9659ad7d4-59569572',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530df02ef0b1d2_34070871',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530df02ef0b1d2_34070871')) {function content_530df02ef0b1d2_34070871($_smarty_tpl) {?><div id="mycarouselHolder" class="block col-md-12 col-sm-12 col-xs-12 ">
					<div class="span3">
				<h2 class="title_specials">Featured Brands</h2>
			</div>
				
		<div class="span9 jcarousel-wrap">		
			<div id="wrap">
			  <ul id="lofjcarousel" class="jcarousel-skin-tango">
									<li class="lof-item">
						<a href="http://192.168.1.10/LadyMoving/3_ella-bache">
							<img src="/LadyMoving/img/m/3-manu_default.jpg" alt="Ella Baché" vspace="0" border="0" />
							
						</a>
					</li>
									<li class="lof-item">
						<a href="http://192.168.1.10/LadyMoving/4_kos-paris">
							<img src="/LadyMoving/img/m/4-manu_default.jpg" alt="KOS Paris" vspace="0" border="0" />
							
						</a>
					</li>
							  </ul>
			</div>
		</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#lofjcarousel").flexisel({
			visibleItems: 6,
			animationSpeed: 1000,
			autoPlay: 0,
			autoPlaySpeed: 3000,
			pauseOnHover: 1,
			enableResponsiveBreakpoints: 1,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 1
	    		},
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 2
	    		},
	    		tablet: {
	    			changePoint:768,
	    			visibleItems: 6
	    		}
	    	}
	    });
	});
</script><?php }} ?>