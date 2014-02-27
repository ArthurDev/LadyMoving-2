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

{capture name=path}Systempay{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

{if isset($systempay_params) && $systempay_params.vads_action_mode == 'SILENT'}
	<h2>{l s='Payment processing' mod='systempay'}</h2>
{else}
	<h2>{l s='Redirection to payment gateway' mod='systempay'}</h2>
{/if}

{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{if isset($systempay_empty_cart) && $systempay_empty_cart}
	<p class="warning">{l s='Your shopping cart is empty.' mod='systempay'}</p>
{else}
	<h3>{l s='Payment by bank card' mod='systempay'}</h3>
	
	<form action="{$systempay_url}" method="post" id="systempay_form"> 
	    {foreach from=$systempay_params key='key' item='value'}
			<input type="hidden" name="{$key}" value="{$value}" />
		{/foreach}

		<p>
			<img src="{$base_dir}modules/systempay/images/{$systempay_logo}" alt="Systempay" style="margin-bottom: 5px" />
			<br />
			
			{if $systempay_params.vads_action_mode == 'SILENT'}
				{l s='Please wait a moment. Your order payment is now processing.' mod='systempay'}
			{else}
				{l s='Please wait, you will be redirected to the payment platform.' mod='systempay'}
			{/if}
			
			<br /> <br />
			{l s='If nothing happens in 10 seconds, please click the button below.' mod='systempay'} 
			<br /><br />
		</p>
	
		<p class="cart_navigation">
			<input type="submit" name="submitPayment" value="{l s='Pay' mod='systempay'}" class="exclusive" />
		</p>
	</form>
	
	<script type="text/javascript">
		{literal}			
			$('#systempay_form').submit();
		{/literal}
	</script>
{/if}