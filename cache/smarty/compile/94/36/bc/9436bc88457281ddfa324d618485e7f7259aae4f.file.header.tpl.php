<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 17:30:18
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:344874684530f681a1d1d91-40589639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9436bc88457281ddfa324d618485e7f7259aae4f' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/header.tpl',
      1 => 1393518213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344874684530f681a1d1d91-40589639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'LEO_RESPONSIVE' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'BOOTSTRAP_CSS_URI' => 0,
    'LEO_THEMENAME' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'LEO_SKIN_DEFAULT' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'LEO_CUSTOMWIDTH' => 0,
    'LEO_CUSTOMFONT' => 0,
    'hide_right_column' => 0,
    'page_name' => 0,
    'hide_left_column' => 0,
    'HOOK_HEADER' => 0,
    'LEO_BGPATTERN' => 0,
    'FONT_SIZE' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'HOOK_TOP' => 0,
    'base_dir' => 0,
    'logo_url' => 0,
    'HOOK_HEADERRIGHT' => 0,
    'HOOK_TOPNAVIGATION' => 0,
    'HOOK_SLIDESHOW' => 0,
    'HOOK_PROMOTETOP' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f681b10cbe2_77841344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f681b10cbe2_77841344')) {function content_530f681b10cbe2_77841344($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/LadyMoving-2/tools/smarty/plugins/modifier.escape.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>
        <?php if ($_smarty_tpl->tpl_vars['LEO_RESPONSIVE']->value){?>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        <?php }?>    
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<script type="text/javascript">
			var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['content_dir']->value);?>
';
			var baseUri = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_uri']->value);?>
';
			var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
			var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
		</script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BOOTSTRAP_CSS_URI']->value;?>
"/> 
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/font-awesome.min.css"/>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['LEO_SKIN_DEFAULT']->value&&$_smarty_tpl->tpl_vars['LEO_SKIN_DEFAULT']->value!="default"){?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['LEO_SKIN_DEFAULT']->value;?>
/css/skin.css"/>
<?php }?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/theme-responsive.css"/>


<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['LEO_CUSTOMWIDTH']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['LEO_CUSTOMFONT']->value){?>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,500' rel='stylesheet' type='text/css' />
<?php }?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/font-awesome.min.css"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/jquery.cookie.js"></script>

<?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value||in_array($_smarty_tpl->tpl_vars['page_name']->value,array('checkout','index','order','address','my-account'))){?><?php $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN'] = new Smarty_variable(null, null, 0);?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value||in_array($_smarty_tpl->tpl_vars['page_name']->value,array('checkout','order','address','addresses','authentication'))){?><?php $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN'] = new Smarty_variable(null, null, 0);?><?php }?>


<!--[if lt IE 9]>
<script src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/html5.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/respond.min.js"></script>
<![endif]-->
	<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>
	
	</head>

	<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['LEO_BGPATTERN']->value;?>
 fs<?php echo $_smarty_tpl->tpl_vars['FONT_SIZE']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?> hide-right-column<?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only<?php }?> keep-header ">
	<p style="display: block;" id="back-top"> <a href="#top"><span></span></a> </p>
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
		</div>
		<?php }?>
		<section id="page" class="clearfix leo-wrapper">
			
			<!-- Header -->
			<header id="header" class="navbar-fixed-top clearfix">
				<section id="topbar">
					<div class="container">		
						<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
	
					</div>
				</section>
				<section id="header-main">
					<div class="container" >
							
							<div class="header-wrap">
								<div class="pull-left logo">
									<h1>
										<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
											<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="Lady Moving - Massy" />
										</a>
									</h1>
								</div>
								<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HEADERRIGHT']->value)){?>
									<div id="header_right" class="inner">
										<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADERRIGHT']->value;?>
	
										<p> bonjour upload 2 plouf chika</p>
									</div>
								<?php }?>
								<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value)){?>
									<nav id="topnavigation" class="clearfix">
										<div class="container">
											<div class="row">
												 <?php echo $_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value;?>

											</div>
										</div>
									</nav>
								<?php }?>
							</div>
						
					</div>
				</section>	
			</header>
			
			<?php if ($_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
			<section id="slideshow" class="block clearfix">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value;?>
 
			</section>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['HOOK_PROMOTETOP']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
			<section id="promotetop" class="clearfix">
				<div class="container">
					<div class="row">
						 <?php echo $_smarty_tpl->tpl_vars['HOOK_PROMOTETOP']->value;?>

					</div>
				</div>
			</section>
			<?php }?>
			<?php if (!in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>					
				<section id="breadcrumb" class="clearfix">
					<div class="container"> 
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
					</div>
				</section>					
			<?php }?>
			<section id="columns" class="clearfix leo-showcase">
				<div class="container">
					<div class="row">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_left_column'=>$_smarty_tpl->tpl_vars['hide_left_column']->value,'hide_right_column'=>$_smarty_tpl->tpl_vars['hide_right_column']->value), 0);?>

	<?php }?>
<?php }} ?>