<?php /*%%SmartyHeaderCode:939520372530f49fe495b54-03897508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e778b1dad9c9127d0623a5800b54dbe236a8b5f1' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leomanufacturerscroll/leomanufacturerscroll.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939520372530f49fe495b54-03897508',
  'variables' => 
  array (
    'show_title' => 0,
    'module_title' => 0,
    'leomanufacturers' => 0,
    'manufacturer' => 0,
    'leoManufactureConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f49fe631152_53660392',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f49fe631152_53660392')) {function content_530f49fe631152_53660392($_smarty_tpl) {?><div id="mycarouselHolder" class="block col-md-12 col-sm-12 col-xs-12 ">
					<div class="span3">
				<h2 class="title_specials">Featured Brands</h2>
			</div>
				
		<div class="span9 jcarousel-wrap">		
			<div id="wrap">
			  <ul id="lofjcarousel" class="jcarousel-skin-tango">
									<li class="lof-item">
						<a href="http://127.0.0.1/LadyMoving-2/3_ella-bache">
							<img src="/LadyMoving-2/img/m/3-manu_default.jpg" alt="Ella Baché" vspace="0" border="0" />
							
						</a>
					</li>
									<li class="lof-item">
						<a href="http://127.0.0.1/LadyMoving-2/4_kos-paris">
							<img src="/LadyMoving-2/img/m/4-manu_default.jpg" alt="KOS Paris" vspace="0" border="0" />
							
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