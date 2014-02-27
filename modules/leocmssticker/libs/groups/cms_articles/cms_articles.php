<?php

/**
 * $ModDesc
 * 
 * @version		$Id: helper.php $Revision
 * @package		modules
 * @subpackage	$Subpackage
 * @copyright	Copyright (C) May 2010 LandOfCoder.com <@emai:landofcoder@gmail.com>. All rights reserved.
 * @website 	htt://landofcoder.com
 * @license		GNU General Public License version 2
 */
if (!defined('_CAN_LOAD_FILES_')) {
    define('_CAN_LOAD_FILES_', 1);
}
if (!class_exists('LofCms_articlesDataSource', false)) {

    class LofCms_articlesDataSource extends LofDataSourceBase {

        /**
         * @var string $__name;
         *
         * @access private
         */
        var $__name = 'product';

        /**
         * override method: get list image from articles.
         */
        function getListByParameters($params, $pparams) {
            $site_url = Tools::htmlentitiesutf8('http://' . $_SERVER['HTTP_HOST'] . __PS_BASE_URI__);
            $products = self::_getListv14($params, $pparams);
            if (empty($products))
                return array();
            return $products;
        }

        

        /**
         * Get list in prestashop v14
         */
        private function _getListv14($params, $pparams) {
            $context = Context::getContext();
            $id_cmsarticle = explode(",", trim($params->get("id_cmsarticle", "1,2,3,4,5")));
            //echo "<pre>".print_r($id_cmsarticle,1); die;
            $ids = array();
            foreach ($id_cmsarticle as $id) {
                $ids[] = (int) $id;
            }
            $where = " p.`id_cms` IN (" . implode(",", $ids) . ")";
            $products = self::getProductsV14($where, 0, $params->get("licmsaitems", 5), $params);
            
            foreach ($products as &$pro){
                $pro["link"] = $context->link->getCMSLink((int)$pro['id_cms'], $pro['link_rewrite']);
            }
            return $products;
        }

        /**
         * Get data source: 
         */
        function getProductsV14($where = '', $limiStart = 0, $limit = 10, $params) {
            global $cookie;
            $id_lang = $params->get('slangarticle', 'auto');
            if ($id_lang == "auto") {
                $id_lang = intval($cookie->id_lang);
            }
            $sql = '
    		SELECT DISTINCT p.id_cms, p.*, cc.*,cl.name      
    		FROM `' . _DB_PREFIX_ . 'cms` cp
    		LEFT JOIN `' . _DB_PREFIX_ . 'cms_lang` p ON (p.`id_cms` = cp.`id_cms` AND p.`id_lang` = ' . (int) ($id_lang) . ') 
    		LEFT JOIN `' . _DB_PREFIX_ . 'cms_category` cc ON cc.`id_cms_category` = cp.`id_cms_category` 
    		LEFT JOIN `' . _DB_PREFIX_ . 'cms_category_lang` cl ON (cp.`id_cms_category` = cl.`id_cms_category` AND cl.`id_lang` = ' . (int) ($id_lang) . ')
    		WHERE ' . $where;
            $sql .= ' LIMIT ' . $limiStart . ',' . $limit;

            $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);
            return $result;
            //return Product::getProductsProperties($id_lang, $result);
        }

    }

}
?>