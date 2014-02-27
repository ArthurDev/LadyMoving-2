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

{if $check_url_warn == true}
	<p class="warning">
		{if $maintenance_mode == true}
			{l s='The shop is in maintenance mode.The automatic notification (peer to peer connection between the payment platform and your shopping cart solution) cannot work.' mod='systempay'}
		{else}
			{l s='The automatic notification (peer to peer connection between the payment platform and your shopping cart solution) hasn\'t worked. Have you correctly set up the server URL in your store backoffice?' mod='systempay'}
			<br />
			{l s='For understanding the problem, please read the documentation of the module : <br />&nbsp;&nbsp;&nbsp;- Chapter &laquo;To read carefully before going further&raquo;<br />&nbsp;&nbsp;&nbsp;- Chapter &laquo;Server URL settings&raquo;' mod='systempay'}
		{/if}
		
		<br />
		{l s='If you think this is an error, you can contact our' mod='systempay'}
		<a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='systempay'}</a>.
	</p>
	
	<br/><br/>
{/if}

{if $prod_info == true}
	<p class="warning">
		{l s='<u><b>GOING INTO PRODUCTION</b></u><br />You want to know how to put your shop into production mode, please go to this URL : ' mod='systempay'}<a href="https://paiement.systempay.fr/html/faq/prod" target="_blank">https://paiement.systempay.fr/html/faq/prod</a>
	</p>
	
	<br/><br/>
{/if}

{if $error_msg == true}
	<p class="warning">
		{l s='Your order has been registered with a payment error.' mod='systempay'}
		
		{l s='Please contact our' mod='systempay'}&nbsp;<a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='systempay'}</a>.
	</p>
{else}
	<p>{l s='Your order on' mod='systempay'} <span class="bold">{$shop_name}</span> {l s='is complete.' mod='systempay'}
		<br /><br />
		{l s='We registered your payment of ' mod='systempay'} <span class="price">{$total_to_pay}</span>
		<br /><br />{l s='For any questions or for further information, please contact our' mod='systempay'} <a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='systempay'}</a>.
	</p>
{/if}