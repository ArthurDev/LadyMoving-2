/*
#####################################################################################################
#
#					Module pour la plateforme de paiement Systempay
#						Version : 1.1a (révision 50362)
#									########################
#					Développé pour Prestashop
#						Version : 1.5.0.x
#						Compatibilité plateforme : V2
#									########################
#					Développé par Lyra Network
#						http://www.lyra-network.com/
#						19/08/2013
#						Contact : supportvad@lyra-network.com
#
#####################################################################################################
*/

/*
* NOTICE OF LICENSE
*
* This source file is licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * Misc JavaScript functions.
 */

function systempayAddOption(first, deleteText) {
	if(first) {
		$('#systempay_multi_options_btn').css('display', 'none');
		$('#systempay_multi_options_table').css('display', '');
	}
	
	var timestamp = new Date().getTime();
	
	var optionLine = '<tr id="systempay_multi_option_' + timestamp + '">' +
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][label]" style="width: 150px;" type="text"/></td>' + 
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][amount_min]" style="width: 80px;" type="text"/></td>' +
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][amount_max]" style="width: 80px;" type="text"/></td>' +
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][contract]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][count]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][period]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input name="SYSTEMPAY_MULTI_OPTIONS[' + timestamp + '][first]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input type="button" value="' + deleteText + '" onclick="javascript: systempayDeleteOption(' + timestamp + ');"/></td>' +
					 '</tr>';
							
	$(optionLine).insertBefore('#systempay_multi_option_add');
}

function systempayDeleteOption(key) {
	$('#systempay_multi_option_' + key).remove();
	
	if($('#systempay_multi_options_table tbody tr').length == 1) {
		$('#systempay_multi_options_btn').css('display', '');
		$('#systempay_multi_options_table').css('display', 'none');
	}	
}