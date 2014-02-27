<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:22:45
         compiled from "C:\wamp\www\LadyMoving\modules\leobootstrapmenu\themes\default\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308145305c9653fcf71-11919797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d1f967a19bdfa817a9646f8636370e63148c395' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\modules\\leobootstrapmenu\\themes\\default\\default.tpl',
      1 => 1392888073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308145305c9653fcf71-11919797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leobootstrapmenu_menu_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305c965419182_07225401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305c965419182_07225401')) {function content_5305c965419182_07225401($_smarty_tpl) {?><nav id="cavas_menu" class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
        <?php echo $_smarty_tpl->tpl_vars['leobootstrapmenu_menu_tree']->value;?>

    </div>
</nav>
<script type="text/javascript">
// <![CDATA[
(function($) {
    $.fn.OffCavasmenu = function(opts) {
        // default configuration
        var config = $.extend({}, {
            opt1: null,
            text_warning_select: "<?php echo smartyTranslate(array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
            text_confirm_remove: "<?php echo smartyTranslate(array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
            JSON: null
        }, opts);
        // main function


        // initialize every element
        this.each(function() {
            var $btn = $('#cavas_menu .navbar-toggle');
            var $nav = null;


            if (!$btn.length)
                return;
            var $nav = $('<section id="off-canvas-nav"><nav class="offcanvas-mainnav" ><div id="off-canvas-button"><span class="off-canvas-nav"></span><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</div></nav></sections>');
            var $menucontent = $($btn.data('target')).find('.megamenu').clone();
            $("body").append($nav);
            $("#off-canvas-nav .offcanvas-mainnav").append($menucontent);


            $("html").addClass ("off-canvas");
            $("#off-canvas-button").click( function(){
                    $btn.click();	
            } );
            $btn.toggle(function() {
                $("body").removeClass("off-canvas-inactive").addClass("off-canvas-active");
            }, function() {
                $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");

            });

        });
        return this;
    }

})(jQuery);
$(document).ready(function() {
    jQuery("#cavas_menu").OffCavasmenu();
    $('#cavas_menu .navbar-toggle').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 0);
        return false;
    });



    var currentURL = window.location;
    currentURL = String(currentURL);
    currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
    baseURL = baseUri.replace("https://","").replace("http://","").replace("www.","");
    isHomeMenu = 0;
    if($("body").attr("id")=="index") isHomeMenu = 1;
    $(".megamenu > li > a").each(function() {
        menuURL = $(this).attr("href").replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
        if( isHomeMenu && (baseURL == menuURL || baseURL == menuURL.substring(0,menuURL.length-3) || baseURL.replace("index.php","")==menuURL)){
            $(this).parent().addClass("active");
            return false;
        }
        if(currentURL == menuURL){
            $(this).parent().addClass("active");
            return false;
        }
    });
});
// ]]>
</script><?php }} ?>