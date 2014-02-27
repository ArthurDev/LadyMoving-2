<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:45
         compiled from "C:\wamp\www\LadyMoving\themes\leoclot\modules\leoblogsarticle\leoblogsarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190295305c965862c13-94784219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1facd70e3bffb6e52e6b29cc285ffabdf5635c7' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\leoblogsarticle\\leoblogsarticle.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190295305c965862c13-94784219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'items' => 0,
    'itemsperpage' => 0,
    'mitems' => 0,
    'columnspage' => 0,
    'scolumn' => 0,
    'item' => 0,
    'thumbUri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c96591b4f4_04417961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c96591b4f4_04417961')) {function content_5305c96591b4f4_04417961($_smarty_tpl) {?>
<!-- MODULE leo blogs article -->
<div id="leoblogsarticle" class="block products_block exclusive leoblogsarticle col-md-6">
	<div class="leo-titleh3">
        <?php if ($_smarty_tpl->tpl_vars['type']->value=="lastest"){?>
            <h3 class="title_specials"><?php echo smartyTranslate(array('s'=>'Our Blog','mod'=>'leoblogsarticle'),$_smarty_tpl);?>
</h3>
        <?php }elseif($_smarty_tpl->tpl_vars['type']->value=="featured"){?>
        	<h3 class="title_specials"><?php echo smartyTranslate(array('s'=>'Featured Articles','mod'=>'leoblogsarticle'),$_smarty_tpl);?>
</h3>
        <?php }else{ ?>
        	<h3 class="title_specials"><?php echo smartyTranslate(array('s'=>'Popular Articles','mod'=>'leoblogsarticle'),$_smarty_tpl);?>
</h3>  
        <?php }?>
       </div>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['items']->value)){?>
                <div class="carousel slide" id="leoblogsarticletab">
                        <?php if (count($_smarty_tpl->tpl_vars['items']->value)>$_smarty_tpl->tpl_vars['itemsperpage']->value){?>	
                        <div class="carousel-button control-specials">
                            <a class="carousel-control left" href="#leoblogsarticletab"   data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#leoblogsarticletab"  data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <?php }?>
                        <div class="carousel-inner">
                        <?php $_smarty_tpl->tpl_vars['mitems'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['items']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['items']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['items']->index++;
 $_smarty_tpl->tpl_vars['items']->first = $_smarty_tpl->tpl_vars['items']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['items']->first;
?>
                                <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']){?>active<?php }?>">
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
									<?php if ($_smarty_tpl->tpl_vars['item']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
									  <div class="row-fluid">
									<?php }?>
									<div class="item-container col-xs-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
">
										<div class="blog-image">
											
											<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" >
												<img class="item_thumb"  src="<?php echo $_smarty_tpl->tpl_vars['thumbUri']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />    
											</a>  
										</div>
										
										<div class="blog-descrition thumbnails">
											<div class="blog-title">
												<a class="itemTitle s_title_block" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>										
											</div>
											<div class="blog-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date_add'];?>
</div>
											<div class="item_descrition">
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['item']->value['short_desc']),150,'...');?>

											</div>
											<div class="blog-datemore">
												
												<div class="blog-viewmore"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'Read more ','mod'=>'leoblogsarticle'),$_smarty_tpl);?>
</a></div>
											</div>
										</div>                   
										
										<div class="clearfix"></div>
									</div>

									<?php if (($_smarty_tpl->tpl_vars['item']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
											</div>
									<?php }?>

									<?php } ?>
                                </div>		
                        <?php } ?>
                        </div>
                </div>
                <?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>