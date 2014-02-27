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
if (!class_exists('LofCms_categoriesDataSource', false)) {

    class LofCms_categoriesDataSource extends LofDataSourceBase {

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
            $context = Context::getContext();
            $products = self::_getListv14($params, $pparams);

            if (empty($products))
                return array();
            $children = array();
            if ($products) {
                foreach ($products as &$v) {
                    $v["link"] = $context->link->getCMSLink((int)$v['id_cms'], $v['link_rewrite']);
                    $pt = $v["name"];
                    $list = @$children[$pt] ? $children[$pt] : array();
                    array_push($list, $v);
                    $children[$pt] = $list;
                }
            }
            return $children;
        }

        /**
         * Get list in prestashop v14
         */
        private function _getListv14($params, $pparams) {
            $where = "";
            $selectCat = $params->get("cms_category", "");
            if ($selectCat != "") {
                $catArray = explode(",", $selectCat);
                if (count($catArray) == 1) {
                    $where = " cp.`id_cms_category` = " . $catArray[0];
                } else {
                    $where = " cp.`id_cms_category` IN (" . $selectCat . ")";
                }
            }
            $catArray = explode(",", $selectCat);
            $articles = self::getProductsV14($where, 0, $params->get("licmscitems", 5), $params);
            return $articles;
        }

        /**
         * Get data source: 
         */
        function getProductsV14($where = '', $limiStart = 0, $limit = 10, $params) {
            global $cookie, $link;
            $module_theme = $params->get('module_theme', 'default');

            $id_lang = $params->get('slangcate', 'auto');

            if ($id_lang == "auto") {
                $id_lang = intval($cookie->id_lang);
            }

            $sql = '
    		SELECT DISTINCT p.id_cms, p.*, cc.*,cl.name      
    		FROM `' . _DB_PREFIX_ . 'cms` cp
    		LEFT JOIN `' . _DB_PREFIX_ . 'cms_lang` p ON (p.`id_cms` = cp.`id_cms` AND p.`id_lang` = ' . (int) ($id_lang) . ') 
    		LEFT JOIN `' . _DB_PREFIX_ . 'cms_category` cc ON cc.`id_cms_category` = cp.`id_cms_category` 
    		LEFT JOIN `' . _DB_PREFIX_ . 'cms_category_lang` cl ON (cp.`id_cms_category` = cl.`id_cms_category` AND cl.`id_lang` = ' . (int) ($id_lang) . ') ';
            $sql .= $where ? " WHERE " . $where : "";
            $sql .= ' LIMIT ' . $limiStart . ',' . $limit;
            $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);
            return $result;
        }

    }

}
?>