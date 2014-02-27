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
if (!defined('_CAN_LOAD_FILES_')){
    define('_CAN_LOAD_FILES_',1);
}
if( !class_exists('LofCustomDataSource', false) ){  
	class LofCustomDataSource extends LofDataSourceBase{
	    /**
		 * @var string $__name;
		 *
		 * @access private
		 */
		var $__name = 'custom';
                
        /**
		 * override method: get list image from articles.
		 */
		function getListByParameters( $params, $pparams ){
			$numberOFAr = $params->get("custom-num",5);	
			$list = array();
			$id_lang = Context::getContext()->language->id;
			for( $i=1;$i<=$numberOFAr;$i++){
				$list[$i-1]["content"] = $params->get($i."-content_".$id_lang,"");
				//$list[$i-1]["link"]  = $params->get($i."-link","");
				//$list[$i-1]["desc"]  = $params->get($i."-desc","");				                                   
			}			
			return $list;			
		}
	}
}
?>