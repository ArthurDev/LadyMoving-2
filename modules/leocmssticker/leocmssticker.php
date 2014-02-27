<?php

/**
 * $ModDesc
 * 
 * @version		$Id: file.php $Revision
 * @package		modules
 * @subpackage	$Subpackage.
 * @copyright	Copyright (C) December 2010 LandOfCoder.com <@emai:landofcoder@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
 */
if (!defined('_CAN_LOAD_FILES_')) {
    define('_CAN_LOAD_FILES_', 1);
}

/**
 * lofaccordion Class
 */
class leocmssticker extends Module {

    /**
     * @var LofParams $_params;
     *
     * @access private;
     */
    private $_params = '';
    public $site_url = '';
    public $_theme = 'tmpl/default';
    public $_leoGroup = '_custom.tpl';

    /**
     * @var array $_postErrors;
     *
     * @access private;
     */
    private $_postErrors = array();

    /**
     * @var string $__tmpl is stored path of the layout-theme;
     *
     * @access private 
     */

    /**
     * Constructor 
     */
    function __construct() {
        $this->name = 'leocmssticker';
        parent::__construct();
        $this->tab = 'LandOfCoder';
        $this->version = '1.1';
        $this->displayName = $this->l('Leo CMS Sticker Module');
        $this->description = $this->l('Leo CMS Sticker');
        if($theme=Configuration::get('leocmssticker_module_theme'))
        $this->_theme = 'tmpl/'.$theme;
        if($group=Configuration::get('leocmssticker_module_group'))
        $this->_leoGroup = "_".strtolower($group).".tpl";
        
        $controller = Dispatcher::getInstance()->getController();
        if(strtolower($controller)=="adminmodules") $this->_includeFile();
    }
    
    public function _includeFile(){
        if (file_exists(_PS_ROOT_DIR_ . '/modules/' . $this->name . '/libs/params.php') && !class_exists("LofParams", false)) {
            if (!defined("LOF_LOAD_LIB_PARAMS")) {
                require( _PS_ROOT_DIR_ . '/modules/' . $this->name . '/libs/params.php' );
                define("LOF_LOAD_LIB_PARAMS", true);
            }
        }
        $this->_params = new LofParams($this->name);
    }
    
    /**
     * process installing 
     */
    function install() {
        if (!parent::install())
            return false;
        if (!$this->registerHook('header'))
            return false;
        if (!$this->registerHook('displayBottom'))
            return false;
        $this->_installData();
        return true;
    }

    public function _installData() {
        Configuration::updateValue($this->name . '_custom-num', '3', true);
		Configuration::updateValue($this->name . '_show_title', '1', true);
        Configuration::updateValue($this->name . '_module_group', 'custom', true);
        Configuration::updateValue($this->name . '_aTransition', 'easeInQuad', true);
        Configuration::updateValue($this->name . '_module_height', 'auto', true);
        Configuration::updateValue($this->name . '_module_width', 'auto', true);
        Configuration::updateValue($this->name . '_win_height', 'auto', true);
        Configuration::updateValue($this->name . '_win_width', 'auto', true);
        Configuration::updateValue($this->name . '_border_style', 'solid', true);
        Configuration::updateValue($this->name . '_border_size', '0', true);
        Configuration::updateValue($this->name . '_border_color', 'transparent', true);
        Configuration::updateValue($this->name . '_background_color', 'transparent', true);
        $languages = Language::getLanguages(false);
        foreach ($languages as $language) {
            Configuration::updateValue($this->name . '_1-content_' . $language['id_lang'], 'aa');
            Configuration::updateValue($this->name . '_1-content_' . $language['id_lang'], "<div class=\"testimonial-wrapper clearfix\">
<div class=\"testimonial-item\">
<div class=\"testimonial\">
<div class=\"info-testimonail\">
<p>This is gddg Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. omnis voluptas assumenda est, omnis dolor repell bloud seimen oyta.placeat facere possimus, omnis voluptas assumenda est</p>
</div>
<a class=\"colorbox-t cboxElement\" href=\"http://www.youtube.com/v/AIwBUqIoqvo\">Watch Video</a></div>
<div class=\"t-avatar pull-left\"><img class=\"img-circle\" src=\"".__PS_BASE_URI__."modules/leocmssticker/img/avata-1.jpg\" alt=\"\" /></div>
<div class=\"profile pull-left\">
<div class=\"infor-profile\">
<p><span>Johnny Doe</span><br /> Hosting customer</p>
</div>
</div>
</div>
</div>
<div class=\"testimonial-wrapper clearfix\">
<div class=\"testimonial-item\">
<div class=\"testimonial\">
<div class=\"info-testimonail\">
<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repell bloud seimen oyta.Proin gravida nibh vel velit auctor aliquet.</p>
</div>
<a class=\"colorbox-t cboxElement\" href=\"http://www.youtube.com/v/AIwBUqIoqvo\">Watch Video</a></div>
<div class=\"t-avatar pull-left\"><img class=\"img-circle\" src=\"".__PS_BASE_URI__."modules/leocmssticker/img/avata1-2.jpg\" alt=\"\" /></div>
<div class=\"profile pull-left\">
<div class=\"infor-profile\">
<p><span>David Doe</span><br /> Hosting customer</p>
</div>
</div>
</div>
</div>", true);
            Configuration::updateValue($this->name . '_2-content_' . $language['id_lang'], 'aa');
            Configuration::updateValue($this->name . '_2-content_' . $language['id_lang'], "<div class=\"testimonial-wrapper clearfix\">
<div class=\"testimonial-item\">
<div class=\"testimonial\">
<div class=\"info-testimonail\">
<p>This is gddg Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. omnis voluptas assumenda est, omnis dolor repell bloud seimen oyta.placeat facere possimus, omnis voluptas assumenda est</p>
</div>
<a class=\"colorbox-t cboxElement\" href=\"http://www.youtube.com/v/AIwBUqIoqvo\">Watch Video</a></div>
<div class=\"t-avatar pull-left\"><img class=\"img-circle\" src=\"".__PS_BASE_URI__."modules/leocmssticker/img/avata-3.jpg\" alt=\"\" /></div>
<div class=\"profile pull-left\">
<div class=\"infor-profile\">
<p><span>Johnny Doe</span><br /> Hosting customer</p>
</div>
</div>
</div>
</div>
<div class=\"testimonial-wrapper clearfix\">
<div class=\"testimonial-item\">
<div class=\"testimonial\">
<div class=\"info-testimonail\">
<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repell bloud seimen oyta.Proin gravida nibh vel velit auctor aliquet.</p>
</div>
<a class=\"colorbox-t cboxElement\" href=\"http://www.youtube.com/v/AIwBUqIoqvo\">Watch Video</a></div>
<div class=\"t-avatar pull-left\"><img class=img-circle\" src=\"".__PS_BASE_URI__."modules/leocmssticker/img/avata-3.jpg\" alt=\"\" /></div>
<div class=\"profile pull-left\">
<div class=\"infor-profile\">
<p><span>David Doe</span><br /> Hosting customer</p>
</div>
</div>
</div>
</div>", true);
            Configuration::updateValue($this->name . '_3-content_' . $language['id_lang'], 'aa');
            Configuration::updateValue($this->name . '_3-content_' . $language['id_lang'], "<div class=\"testimonial-wrapper clearfix\">
<div class=\"testimonial-item\">
<div class=\"testimonial\">
<div class=\"info-testimonail\">
<p>This is gddg Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. omnis voluptas assumenda est, omnis dolor repell bloud seimen oyta.placeat facere possimus, omnis voluptas assumenda est</p>
</div>
<a class=\"colorbox-t cboxElement\" href=\"http://www.youtube.com/v/AIwBUqIoqvo\">Watch Video</a></div>
<div class=\"t-avatar pull-left\"><img class=\"img-circle\" src=\"".__PS_BASE_URI__."modules/leocmssticker/img/avata-1.jpg\" alt=\"\" /></div>
<div class=\"profile pull-left\">
<div class=\"infor-profile\">
<p><span>Johnny Doe</span><br /> Hosting customer</p>
</div>
</div>
</div>
</div>
<div class=\"testimonial-wrapper clearfix\">
<div class=\"testimonial-item\">
<div class=\"testimonial\">
<div class=\"info-testimonail\">
<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repell bloud seimen oyta.Proin gravida nibh vel velit auctor aliquet.</p>
</div>
<a class=\"colorbox-t cboxElement\" href=\"http://www.youtube.com/v/AIwBUqIoqvo\">Watch Video</a></div>
<div class=\"t-avatar pull-left\"><img class=\"img-circle\" src=\"".__PS_BASE_URI__."modules/leocmssticker/img/avata-3.jpg\" alt=\"\" /></div>
<div class=\"profile pull-left\">
<div class=\"infor-profile\">
<p><span>David Doe</span><br /> Hosting customer</p>
</div>
</div>
</div>
</div>", true);
        }
        return true;
    }

    /*
     * register hook right comlumn to display slide in right column
     */

    function hookrightColumn($params) {
        return $this->processHook($params, "rightColumn");
    }

    /*
     * register hook left comlumn to display slide in left column
     */

    function hookleftColumn($params) {
        return $this->processHook($params, "leftColumn");
    }

    function hooktop($params) {
        return $this->processHook($params, "top");
    }

    function hookfooter($params) {
        return $this->processHook($params, "footer");
    }

    function hookcontenttop($params) {
        return $this->processHook($params, "contenttop");
    }

    function hookHeader($params) {
    }

    function hookHome($params) {
        return $this->processHook($params, "home");
    }

    function hookDisplayHeaderRight($params) {
        return $this->processHook($params, "headerright");
    }

    function hookDisplaySlideshow($params) {
        return $this->processHook($params, "slideshow");
    }

    function hookTopNavigation($params) {
        return $this->processHook($params, "navigation");
    }

    function hookDisplayPromoteTop($params) {
        return $this->processHook($params, "promotetop");
    }

    function hookDisplayBottom($params) {
        return $this->processHook($params, "bottom");
    }

    function hookDisplayContentBottom($params) {
        return $this->processHook($params, "contentbottom");
    }

    function hookdisplayRightColumn($params) {
        return $this->processHook($params, "rightcolumn");
    }

    function hookdisplayLeftColumn($params) {
        return $this->processHook($params, "leftcolumn");
    }

    function hookdisplayFooter($params) {
        return $this->processHook($params, "footer");
    }

    /**
     * Proccess module by hook
     * $pparams: param of module
     * $pos: position call
     */
    function processHook($pparams, $pos = "home") {
        if (!$this->isCached("/".$this->_theme."/".$this->_leoGroup, $this->getCacheId())) {
            global $smarty, $link;
            $this->_includeFile();
            //load param
            $params = $this->_params;
            //$this->site_url = Tools::htmlentitiesutf8('http://' . $_SERVER['HTTP_HOST'] . __PS_BASE_URI__);
            $params->set('auto_renderthumb', 0);
            $params->set('aurenthumb', 0);
            if (file_exists(_PS_ROOT_DIR_ . '/modules/' . $this->name . '/libs/group_base.php') && !class_exists("LofDataSourceBase", false)) {
                if (!defined("LOF_LOAD_LIB_GROUP")) {
                    require_once( _PS_ROOT_DIR_ . '/modules/' . $this->name . '/libs/group_base.php' );
                    define("LOF_LOAD_LIB_GROUP", true);
                }
            }
            // get call object to process getting source
            $source = $params->get('module_group', 'cms_articles');
            $path = _PS_ROOT_DIR_ . '/modules/' . $this->name . '/libs/groups/' . strtolower($source) . "/" . strtolower($source) . '.php';
            if (!file_exists($path)) {
                return array();
            }
            require_once $path;
            $objectName = "Lof" . ucfirst($source) . "DataSource";
            $object = new $objectName();
            $products = $object->getListByParameters($params, $pparams);
            if (!$products) {
                if ($source == "image") {
                    return $this->l("You don't input image folder or don't exist any image in your folder");
                } else {
                    return $this->l("Don't exist any product.");
                }
            }
            // get params
            
            $tmp = $params->get('module_height', 'auto');
            $moduleHeight = ( $tmp == 'auto' ) ? 'auto' : (int) $tmp . 'px';
            $tmp = $params->get('module_width', 556);
            $moduleWidth = ( $tmp == 'auto') ? 'auto' : (int) $tmp . 'px';
            $centerWidth = 0;
            if ($tmp != "auto")
                $centerWidth = ($tmp - 536) . "px";
            if ($centerWidth <= 0)
                $centerWidth = 0;

            
            $openTarget = $params->get('open_target', 'parent');
            $autoplay = $params->get('autoplay', 1);
            $interval = "false";
            if($autoplay) 
                $interval = $params->get('interval', 4000);
            // template asignment variables
            $smarty->assign(array(
                'modName' => $this->name,
                'cmssticker_products' => $products,
                'autoplay' => $params->get('autoplay', 1),
                'show_title' => $params->get('show_title', 1),
                'startSlide' => $params->get('startSlide', 0),
                'interval' => $interval,
                'show_controls' => $params->get('show_controls', 1),
                'module_width' => $moduleWidth,
                'module_height' => $moduleHeight,
                'open_target'  => $params->get('open_target', '_blank'),
                'limit_cate'  => $params->get('licmscitems', '5'),
             ));
        }
		
        $this->context->controller->addCSS(($this->_path).$this->_theme."/assets/style.css", 'all');
        return $this->display(__FILE__, $this->_theme."/".$this->_leoGroup, $this->getCacheId());        
    }

    /**
     * Get list of sub folder's name 
     */
    public function getFolderList($path) {
        $items = array();
        $handle = opendir($path);
        if (!$handle) {
            return $items;
        }
        while (false !== ($file = readdir($handle))) {
            if (is_dir($path . $file))
                $items[$file] = $file;
        }
        unset($items['.'], $items['..'], $items['.svn']);
        return $items;
    }

    /**
     * Render processing form && process saving data.
     */
    public function getContent() {
        $html = "";
        if (Tools::isSubmit('submit')) {
            $this->_postValidation();
            if (!sizeof($this->_postErrors)) {
                $definedConfigs = array(
                    'module_theme' => '',
                    'module_group' => '',
                    'module_title' => '',
                    'title_style' => '',
                    'show_title' => '1',
                    'show_controls' => '',
                    // CMS categories group
                    'des_max_cmsc' => '',
                    'licmscitems' => '',
                    'slangcate' => '',
                    // CMS articles group
                    'id_cmsarticle' => '',
                    'des_max_cmsa' => '',
                    'licmsaitems' => '',
                    'slangarticle' => '',
                    /* Global Setting */
                    'effect' => '',
                    'module_height' => '',
                    'module_width' => '',
                    'win_height' => '',
                    'win_width' => '',
                    'border_style' => '',
                    'border_size' => '',
                    'border_color' => '',
                    'border_radius' => '',
                    'padding_size' => '',
                    'background_color' => '',
                    'padding_size' => '',
                    'autoplay' => '',
                    'startSlide' => '',
                    'interval' => '',
                    'aDuration' => '',
                    'aTransition' => '',
                    'custom-num' => '',
                    'open_target' => '_blank'
                    
                );
                $listarticle = Tools::getValue('custom-num');
                $languages = Language::getLanguages(false);
                for ($i = 1; $i <= $listarticle; $i++) {
                    foreach ($languages as $lang) {
                        $definedConfigs[$i . "-content_" . $lang['id_lang']] = "";
                    }
                    //$definedConfigs[$i."-link"]  = "";
                    //$definedConfigs[$i."-desc"]  = "";                                      
                }
                foreach ($definedConfigs as $config => $key) {
                    if (strlen($this->name . '_' . $config) >= 32) {
                        echo $this->name . '_' . $config;
                    } else {
                        Configuration::updateValue($this->name . '_' . $config, Tools::getValue($config), true);
                    }
                }
                if (Tools::getValue('category')) {
                    if (in_array("", Tools::getValue('category'))) {
                        $catList = "";
                    } else {
                        $catList = implode(",", Tools::getValue('category'));
                    }
                    Configuration::updateValue($this->name . '_category', $catList, true);
                }
                if (Tools::getValue('cms_category')) {
                    $catCMS = Tools::getValue('cms_category');
                    if (in_array("", Tools::getValue('cms_category'))) {
                        //unset($catCMS[0]);
                        //$cat = implode(",",$catCMS);
                        $cat = '';
                    } else {
                        $cat = implode(",", Tools::getValue('cms_category'));
                    }
                    Configuration::updateValue($this->name . '_cms_category', $cat, true);
                }
                $html .= '<div class="conf confirm">' . $this->l('Settings updated successful') . '</div>';
            } else {
                foreach ($this->_postErrors AS $err) {
                    $html .= '<div class="alert error">' . $err . '</div>';
                }
            }
            // reset current values.
            $this->_params = new LofParams($this->name);
        }

        return $html . $this->_getFormConfig();
    }

    /**
     * Render Configuration From for user making settings.
     *
     * @return context
     */
    private function _getFormConfig() {
        $html = '';

        $formats = ImageType::getImagesTypes('products');
        $themes = $this->getFolderList(dirname(__FILE__) . "/tmpl/");
        $groups = $this->getFolderList(dirname(__FILE__) . "/libs/groups/");
        if (version_compare(_PS_VERSION_,"1.4","<=")) {
            if (isset($groups['cms_categories'])) {
                unset($groups['cms_categories']);
            }
        }
        ob_start();
        include_once dirname(__FILE__) . '/config/' . $this->name . '.php';
        $html .= ob_get_contents();
        ob_end_clean();
        return $html;
    }

    /**
     * Process vadiation before saving data 
     */
    private function _postValidation() {
        if (!Validate::isCleanHtml(Tools::getValue('module_height')))
            $this->_postErrors[] = $this->l('The "Module height" you entered was not allowed, sorry');
        if (!Validate::isCleanHtml(Tools::getValue('module_width')))
            $this->_postErrors[] = $this->l('The "Module width" you entered was not allowed, sorry');
        if (!Validate::isCleanHtml(Tools::getValue('licmsaitems')) || !is_numeric(Tools::getValue('licmsaitems')))
            $this->_postErrors[] = $this->l('The limit items CMS you entered was not allowed, sorry');
        if (version_compare(_PS_VERSION_,"1.4",">=")) {
            if (!Validate::isCleanHtml(Tools::getValue('licmscitems')) || !is_numeric(Tools::getValue('licmscitems')))
                $this->_postErrors[] = $this->l('The limit items CMS Categories you entered was not allowed, sorry');
        }
    }

    /**
     * Get value of parameter following to its name.
     * 
     * @return string is value of parameter.
     */
    public function getParamValue($name, $default = '') {
        return $this->_params->get($name, $default);
    }
    
    protected function getCacheId($name = null, $hook = '') {
        $cache_array = array(
            $name !== null ? $name : $this->name,
            $hook,
            date('Ymd'),
            (int) Tools::usingSecureMode(),
            (int) $this->context->shop->id,
            (int) Group::getCurrent()->id,
            (int) $this->context->language->id,
            (int) $this->context->currency->id,
            (int) $this->context->country->id
        );
        return implode('|', $cache_array);
    }
    
    public function _clearBLCCache(){
        $this->_clearCache($this->_theme.'_cms_articles.tpl');
        $this->_clearCache($this->_theme.'_cms_categories.tpl');
        $this->_clearCache($this->_theme.'_custom.tpl');
    }

}