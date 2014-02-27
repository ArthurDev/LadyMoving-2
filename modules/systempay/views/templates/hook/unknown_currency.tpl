{*
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
*}

{*
* NOTICE OF LICENSE
*
* This source file is licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*}

<p class="payment_module">
	<img src="{$base_dir}modules/systempay/images/BannerLogo1.gif" alt="{l s='Payment method unavailable for the currency : ' mod='systempay'} {$systempay_unknown_currency->sign}({$systempay_unknown_currency->name})" />
	{l s='Payment method unavailable for the currency : ' mod='systempay'} {$systempay_unknown_currency->sign}({$systempay_unknown_currency->name})
</p>