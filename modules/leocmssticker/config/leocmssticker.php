<?php
if (!defined('_CAN_LOAD_FILES_'))
    exit;
?>
<link rel="stylesheet" href="<?php echo __PS_BASE_URI__ . "modules/" . $this->name . "/assets/admin/form.css"; ?>" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="<?php echo __PS_BASE_URI__ . "modules/" . $this->name . "/assets/admin/form.js"; ?>"></script>

<?php 
    // TinyMCE
    global $cookie;
    $iso = Language::getIsoById((int) ($cookie->id_lang));
    $isoTinyMCE = (file_exists(_PS_ROOT_DIR_ . '/js/tiny_mce/langs/' . $iso . '.js') ? $iso : 'en');
    $ad = dirname($_SERVER["PHP_SELF"]);
    echo '
			<script type="text/javascript">	
			var iso = \'' . $isoTinyMCE . '\' ;
			var pathCSS = \'' . _THEME_CSS_DIR_ . '\' ;
			var ad = \'' . $ad . '\' ;
			</script>
			<script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/tinymce.inc.js"></script>';
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.it-addrow-block .add').each(function(idx, item) {
            $(item).bind('click', function(e) {
                var name = $(item).attr('id').replace('btna-', '');
                var div = $('<div class="row"></div>');
                var spantext = $('<span class="spantext"></span>');
                var span = $('<span class="remove"></span>');
                var input = $('<input type="text" name="' + name + '[]" value=""/>');

                var parent = $(item).parent().parent();

                div.append(spantext);
                div.append(input);
                div.append(span);

                parent.append(div);
                number = parent.find('input').length;
                spantext.html(parent.find('input').length);

                span.bind('click', function() {
                    if (span.parent().find('input').value) {
                        if (confirm('Are you sure to remove this')) {
                            span.parent().remove();
                        }
                    } else {
                        span.parent().remove();
                    }
                });
            });
        });

        $('.it-addrow-block .remove').bind('click', function(events) {
            parent = $(this).parent();
            if (parent.find('input').value) {
                if (confirm('Are you sure to remove this')) {
                    parent.remove();
                }
            } else {
                parent.remove();
            }
        });
        

        var selected;

        $('.colorwell')

                .each(function() {
            f.linkTo(this);
            $(this).css('opacity', 0.75);
        })

                .focus(function() {

            //$('#picker').show();

            if (selected) {

                $(selected).css('opacity', 0.75).removeClass('colorwell-selected');

            }

            f.linkTo(this);

            //p.css('opacity', 1);

            $(selected = this).css('opacity', 1).addClass('colorwell-selected');

        });
    });
</script>

<h3><?php echo $this->l('Lof CMS Sticker Configuration'); ?></h3>
<?php
//register Yes - No Lang
$yesNoLang = array("0" => $this->l('No'), "1" => $this->l('Yes'));
$targetArr = array("_blank" => $this->l('Blank'), "_parent" => $this->l('Parent'), "_self" => $this->l('Self'), "_top" => $this->l('Top'));
$fileLangArr = array(
    "is_ena" => $this->l('Is Enabled'),
    "global_set" => $this->l("Content"),
    "title" => $this->l("Title"),
    "link" => $this->l("Link"),
    "content" => $this->l("Content")
);
/*
  $datas = $this->_params->getIndexedCategories();
  echo "<pre>".print_r($datas,1); */
$languages = Language::getLanguages(true);
$lang = array();
$lang['auto'] = 'Auto Language';
foreach ($languages AS $language) {
    $lang[$language['id_lang']] = $language['name'];
}
$this->context->controller->addJS(array(
    _PS_JS_DIR_ . 'tiny_mce/tiny_mce.js',
    _PS_JS_DIR_ . 'tinymce.inc.js'));
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        tinySetup();
    });
</script>
<form action="<?php echo $_SERVER['REQUEST_URI'] . '&rand=' . rand(); ?>" method="post" id="lofform">
    <input type="submit" name="submit" value="<?php echo $this->l('Update'); ?>" class="button" />
    <fieldset>
        <legend><img src="../img/admin/contact.gif" /><?php echo $this->l('General Setting'); ?></legend>
        <div class="lof_config_wrrapper clearfix">
            <ul>
                <?php
                echo $this->_params->selectTag("module_theme", $themes, $this->getParamValue("module_theme", 'default'), $this->l('Theme - Layout'), 'class="inputbox select-group"', 'class="row" title="' . $this->l('Select a theme') . '"');
                //echo $this->_params->inputTag("module_title",$this->getParamValue("module_title","Lof CMS Sticker"),$this->l('Module title'),'class="text_area"','class="row"','');
                echo $this->_params->radioBooleanTag("show_title", $yesNoLang, $this->getParamValue("show_title", 0), $this->l('Show Title'), '', 'class="row"', '', '');
                echo $this->_params->selectTag("module_group", $groups, $this->getParamValue("module_group", ''), $this->l('Select Group'), 'class="inputbox select-group"', 'class="row" title="' . $this->l('Select a group') . '"');
                if (version_compare(_PS_VERSION_,"1.4",">=")) {
                    ?>
                    <li class="row module_group-cms_categories">
                        <?php
                        echo $this->_params->lofGroupTag($this->l('Group CMS Categories'), "lof-group");
                        echo $this->_params->getCms_category("cms_category[]", $this->getParamValue("cms_category", ""), $this->l('Select CMS Category'), 'size="10" multiple="multiple" style="width: 90%;" class="inputbox"', '', 'class="row home_sorce-selectcat"', '', $this->l('All Categories'));
                        echo $this->_params->inputTag("licmscitems", $this->getParamValue("licmscitems", 5), $this->l('Limit Items'), 'class="text_area"', '', 'class="row module_group-product"');
                        echo $this->_params->selectTag("slangcate", $lang, $this->getParamValue("slangcate", "auto"), $this->l('Select Language'), 'class="inputbox select-group"', '', 'class="row home_sorce-selectcat"');
                        echo $this->_params->lofGroupTag($this->l('End Group'), "lof-group");
                        ?>
                    </li>
                    <?php
                }
                ?>
                <li class="row module_group-custom">
                    <?php
                    echo $this->_params->inputTag("custom-num", $this->getParamValue("custom-num", 5), $this->l('Number of Article'), 'class="text_area"', '', 'class="row"');
                    $divlang = '';
                    for ($i = 1; $i <= $this->getParamValue("custom-num", 5); $i++) {
                        $divlang .= '¤c' . $i . '-content';
                    }
                    $divlang = ltrim($divlang, '¤');
                    for ($i = 1; $i <= $this->getParamValue("custom-num", 5); $i++) {
                        $fileOption = array();
                        $languages = Language::getLanguages(false);
                        $values = array();
                        foreach ($languages as $language) {
                            $values[$language['id_lang']] = $this->getParamValue($i . "-content_" . $language['id_lang'], "");
                        }
                        $fileValues = array("content" => $values);
                        echo $this->_params->fileTag($i, $fileOption, $fileValues, $fileLangArr, $this->l('Article ').$i, 'class="text_area"', '', 'class="lof-config-full"', $divlang);
                    }
                    ?>
                </li>
                <li class="row module_group-cms_articles">
                    <?php
                    echo $this->_params->lofGroupTag($this->l('Group CMS Articles'), "lof-group");
                    echo $this->_params->inputTag("id_cmsarticle", $this->getParamValue("id_cmsarticle", "1,2,3,4,5"), $this->l('Id Articles'), 'class="text_area"', '', 'class="row module_group-product"', '', 'Insert Id Articles');
                    echo $this->_params->inputTag("licmsaitems", $this->getParamValue("licmsaitems", 5), $this->l('Limit Items'), 'class="text_area"', '', 'class="row module_group-product"');
                    echo $this->_params->selectTag("slangarticle", $lang, $this->getParamValue("slangarticle", "auto"), $this->l('Select Language'), 'class="inputbox select-group"', '', 'class="row home_sorce-selectcat"');
                    echo $this->_params->lofGroupTag($this->l('End Group'), "lof-group");
                    ?>
                </li>
            </ul>
        </div>
    </fieldset>

    <fieldset>
        <legend><img src="../img/admin/contact.gif" /><?php echo $this->l('Global Setting'); ?></legend>
        <div class="lof_config_wrrapper clearfix">
            <ul>
                <li>

                    <?php
                    $target = array(
                        "_blank" => $this->l("Blank"),
                        "_self" => $this->l("Self"),
                        "_parent" => $this->l("Parent"),
                        "_top" => $this->l("Top")
                    );

                    echo $this->_params->selectTag("autoplay", $yesNoLang, $this->getParamValue("autoplay", "1"), $this->l('Auto play'), 'class="row"', '', 'class="row"');
                    echo $this->_params->inputTag("interval", $this->getParamValue("interval", 4000), $this->l('Interval'), 'class="text_area"', 'class="row"', '', 'Set period of time to allow the module playing.');
                    echo $this->_params->radioBooleanTag("show_controls", $yesNoLang, $this->getParamValue("show_controls", 1), $this->l('Show Button Controls'), '', 'class="row"', '', '');
                    echo $this->_params->inputTag("module_height", $this->getParamValue("module_height", "auto"), $this->l('Module Height'), 'class="text_area"', 'class="row"', '');
                    echo $this->_params->inputTag("module_width", $this->getParamValue("module_width", "200"), $this->l('Module Width'), 'class="text_area"', 'class="row"', '');
                    echo $this->_params->inputTag("startSlide", $this->getParamValue("startSlide", 0), $this->l('Start Slide'), 'class="text_area"', 'class="row"', '', 'Start Slide');
                    echo $this->_params->selectTag("open_target", $target, $this->getParamValue("open_target", "_blank"), $this->l('Target'), 'class="inputbox"', 'class="row"', '', 'Target');
                    ?>
                </li>
            </ul>
        </div>
    </fieldset>
    <br />
    <input type="submit" name="submit" value="<?php echo $this->l('Update'); ?>" class="button" />
    <fieldset><legend><img src="../img/admin/comment.gif" alt="" title="" /><?php echo $this->l('Information'); ?></legend>    	
        <br />
        @copyright: <a href="http://leotheme.com">leotheme.com</a>
    </fieldset>
</form>
