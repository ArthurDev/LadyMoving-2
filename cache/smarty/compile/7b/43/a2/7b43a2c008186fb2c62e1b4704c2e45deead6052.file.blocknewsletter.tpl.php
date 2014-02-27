<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 16:54:06
         compiled from "C:\wamp\www\Github\LadyMoving-2\themes\leoclot\modules\blocknewsletter\blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26214530f5f9e35c3c2-33268032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b43a2c008186fb2c62e1b4704c2e45deead6052' => 
    array (
      0 => 'C:\\wamp\\www\\Github\\LadyMoving-2\\themes\\leoclot\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1393509248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26214530f5f9e35c3c2-33268032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f5f9e3d1d41_70860660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f5f9e3d1d41_70860660')) {function content_530f5f9e3d1d41_70860660($_smarty_tpl) {?>

<!-- Block Newsletter module-->   
<div id="newsletter_block_left" class="block ">
    <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
    <div class="block_content">
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
        <p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
    <?php }?>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
            <p>
                <input class="inputNew" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
                <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Sign up','mod'=>'blocknewsletter'),$_smarty_tpl);?>
" class="button_mini" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </p>
        </form>
    </div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?>
                $('#columns').before('<div class="clearfix"></div><p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning<?php }else{ ?>success<?php }?>"><?php echo smartyTranslate(array('s'=>"Newsletter:",'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>');
            <?php }?>
        });
</script>
<?php }} ?>