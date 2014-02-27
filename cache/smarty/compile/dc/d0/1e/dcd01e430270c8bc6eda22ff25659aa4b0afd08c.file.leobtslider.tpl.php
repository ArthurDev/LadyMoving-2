<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 17:30:14
         compiled from "/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leobtslider/leobtslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297848519530f681604a836-50779242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd01e430270c8bc6eda22ff25659aa4b0afd08c' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/leobtslider/leobtslider.tpl',
      1 => 1392889096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297848519530f681604a836-50779242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leobtslider_modid' => 0,
    'leobtslider_slides' => 0,
    'slide' => 0,
    'leobtslider' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f68163eff51_54284740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f68163eff51_54284740')) {function content_530f68163eff51_54284740($_smarty_tpl) {?><div id="leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" class="slide leobttslider" >
	<div class="carousel-inner">
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slidename']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slidename']['index']++;
?>
			<div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slidename']['index']==0){?> active<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['mainimage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" /></a>
				<?php }else{ ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['mainimage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" />
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']){?>
					<div class="slide-info hidden-xs">
						<h2><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</a></h1>
						<div class="slide-desc"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
						<a class="readmore" title="<?php echo smartyTranslate(array('s'=>'Shop Now','mod'=>'leobtslider'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
" ><?php echo smartyTranslate(array('s'=>'Shop Now','mod'=>'leobtslider'),$_smarty_tpl);?>
<i class="fa fa-angle-right"></i></a>
					</div>
				<?php }?>
			</div>
		<?php } ?>
	</div>


	<div class="carousel-thumb">
		<?php if (count($_smarty_tpl->tpl_vars['leobtslider_slides']->value)>1){?>
		<div class="carousel-button">
			<a class="carousel-control left" href="#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" data-slide="next">&rsaquo;</a>
		</div>
		<?php }?>

		<?php if (count($_smarty_tpl->tpl_vars['leobtslider_slides']->value)>1){?>
			<?php if ($_smarty_tpl->tpl_vars['leobtslider']->value['image_navigator']){?>
				<ol class="carousel-indicators thumb-indicators hidden-phone">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']++;
?>
					<li data-target="#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index']==0){?>active<?php }?>">
						<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbnail'];?>
"/>
					</li>
				<?php } ?>
				</ol>
			<?php }else{ ?>
				<ol class="carousel-indicators">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']++;
?>
					<li data-target="#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index']==0){?>active<?php }?>"></li>
				<?php } ?>
				</ol>
			<?php }?>
		<?php }?>
	</div>



<?php if ($_smarty_tpl->tpl_vars['leobtslider']->value['auto']){?>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		$('#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
').carousel({
		  interval: <?php echo $_smarty_tpl->tpl_vars['leobtslider']->value['delay'];?>

		});
	});
	
</script>
<?php }?><?php }} ?>