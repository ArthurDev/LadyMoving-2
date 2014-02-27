<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 16:16:20
         compiled from "C:\wamp\www\LadyMoving\modules\systempay\views\templates\back\back_office.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2626253061c4443b028-29283801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d70df513ec55feb7f4a186179d6d68ecf0ff022' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\modules\\systempay\\views\\templates\\back\\back_office.tpl',
      1 => 1380616464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626253061c4443b028-29283801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'systempay_message' => 0,
    'systempay_request_uri' => 0,
    'tabs' => 0,
    'systempay_js_dir' => 0,
    'systempay_module_js_dir' => 0,
    'systempay_common' => 0,
    'systempay_general_tab' => 0,
    'systempay_single_tab' => 0,
    'systempay_multi_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53061c44496309_30536970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061c44496309_30536970')) {function content_53061c44496309_30536970($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['systempay_message']->value;?>


<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['systempay_request_uri']->value;?>
">	
	<script type="text/javascript">
		var pos_select = <?php echo $_smarty_tpl->tpl_vars['tabs']->value;?>
;
	</script>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['systempay_js_dir']->value;?>
jquery.tabpane.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['systempay_js_dir']->value;?>
jquery.tabpane.css" />
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['systempay_module_js_dir']->value;?>
systempay.js"></script>
	
	<input type="hidden" name="tabs" id="tabs" value="0" />
	
	<div class="tab-page">
		<?php echo $_smarty_tpl->tpl_vars['systempay_common']->value;?>

	</div>
	
	<div class="tab-pane" id="tab-pane-1" style="width: 100%;">
		<div class="tab-page" id="step1">
		    <h4 class="tab" style="width: 210px !important;"><?php echo smartyTranslate(array('s'=>'GENERAL CONFIGURATION','mod'=>'systempay'),$_smarty_tpl);?>
</h4>
		    <?php echo $_smarty_tpl->tpl_vars['systempay_general_tab']->value;?>

		</div>
		
		<div class="tab-page" id="step2">
		     <h4 class="tab" style="width: 210px !important;"><?php echo smartyTranslate(array('s'=>'ONE-TIME PAYMENT','mod'=>'systempay'),$_smarty_tpl);?>
</h4>
		     <?php echo $_smarty_tpl->tpl_vars['systempay_single_tab']->value;?>

		</div>
		
		<div class="tab-page" id="step3">
		     <h4 class="tab" style="width: 210px !important;"><?php echo smartyTranslate(array('s'=>'PAYMENT IN SEVERAL TIMES','mod'=>'systempay'),$_smarty_tpl);?>
</h4>
		     <?php echo $_smarty_tpl->tpl_vars['systempay_multi_tab']->value;?>
		 
		</div>
	
		<div class="clear">
			<input type="submit" class="button" name="systempay_submit_admin_form" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'systempay'),$_smarty_tpl);?>
" />
		</div>
	</div>
	
	<div class="clear"></div>
	
	<script type="text/javascript">
		function loadTab(id) {}
		setupAllTabs();
	</script>
</form><?php }} ?>