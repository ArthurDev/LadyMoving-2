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

{if $systempay_single_enabled == true}

	<p class="payment_module">
		{if $systempay_std_card_data_mode == 1}
			<a onclick="javascript:$('#systempay_standard').submit();" href="javascript:void(0);" title="{l s='Click here to pay by bank card' mod='systempay'}">
		{/if}		
			<img width="120" src="{$base_dir_ssl}modules/systempay/images/BannerLogo1.gif" alt="Systempay" />
			{$systempay_std_title}		
		{if $systempay_std_card_data_mode == 1}
			</a>
		{/if}
	</p>

	<form action="{$link->getModuleLink('systempay', 'redirect')}" method="POST" id="systempay_standard" name="systempay_standard" style="padding-left: 20px;">
		<input type="hidden" name="systempay_payment_type" value="standard" />
		{if ($systempay_std_card_data_mode == 2) OR ($systempay_std_card_data_mode == 3) }
			{if {$systempay_avail_cards|@count} == 1}
				<input type="hidden" id="systempay_card_type_{$systempay_avail_cards.0}" name="systempay_card_type" value="{$systempay_avail_cards.0}" style="vertical-align: middle;">
				<label for="systempay_card_type_{$systempay_avail_cards.0}"><img style="vertical-align: middle; margin-right:10px; height:20px;" src="{$base_dir_ssl}modules/systempay/images/{$systempay_avail_cards.0|lower}.gif" alt="{$systempay_avail_cards.0}" title="{$systempay_avail_cards.0}" /></label>
			{else}
				{assign var=first value=true}
				{foreach from=$systempay_avail_cards item="card"}
					{if $first == true}
						<input type="radio" id="systempay_card_type_{$card}" name="systempay_card_type" value="{$card}" style="vertical-align: middle;" checked="checked">
						{assign var=first value=false}
				  	{else}	
			    		<input type="radio" id="systempay_card_type_{$card}" name="systempay_card_type" value="{$card}" style="vertical-align: middle;">
			    	{/if}
					<label for="systempay_card_type_{$card}"><img style="vertical-align: middle; margin-right:10px; height:20px;" src="{$base_dir_ssl}modules/systempay/images/{$card|lower}.gif" alt="{$card}" title="{$card}" /></label>
				{/foreach}
			{/if}

			{if $systempay_std_card_data_mode == 3}
				<p class="clear"> </p>
				<label for="systempay_card_number"> {l s='Card number' mod='systempay'}</label><br />
				<input type="text" name="systempay_card_number" value="" autocomplete="off" maxlength="19" id="systempay_card_number" size="30" maxlength="16" />
				
				<p class="clear"> </p>
				<label for="systempay_cvv"> {l s='CVV' mod='systempay'}</label><br />
				<input type="text" name="systempay_cvv" value="" autocomplete="off" maxlength="4" id="systempay_cvv" size="5" maxlength="4" />
				
				<p class="clear"> </p>
				<label for="systempay_expiry_month">{l s='Expiration date' mod='systempay'}</label><br />
				<select name="systempay_expiry_month" id="systempay_expiry_month" style="width:60px;">
					<option value="">{l s='Month'}</option>
					{section name=expiry start=1 loop=13 step=1}
					<option value="{$smarty.section.expiry.index}">{$smarty.section.expiry.index}</option>
					{/section}
				</select>
							
				<select name="systempay_expiry_year" id="systempay_expiry_year" style="width: 60px;">
					<option value="">{l s='Year'}</option>
					{assign var=year value=$smarty.now|date_format:"%Y"}
					{section name=expiry start=$year loop=$year+9 step=1}
			  		<option value="{$smarty.section.expiry.index}">{$smarty.section.expiry.index}</option>
					{/section}
				</select>
			{/if}
			
			<br /><p class="clear"> </p>
			<input type="submit" name="submit" value="{l s='Pay now' mod='systempay'}" class="button" />
		{/if}
	</form>
	
	<p class="clear"> </p>
	
	<script type="text/javascript">
		{if $systempay_std_card_data_mode == 1}
		{literal}
			$(document).ready(function() {
				var link = $('#systempay_standard_direct_link').click(function() {
					$('#systempay_standard').submit();
					return false;
				});
			});
		{/literal}
		{/if}
		
		{if $systempay_std_card_data_mode == 3}
		{literal}
			$(document).ready(function() {
				$('#systempay_standard').bind('submit', function() {
					$('#systempay_standard input').each(function() {
						$(this).removeClass('invalid');
					});
					
					$('#systempay_standard select').each(function() {
						$(this).removeClass('invalid');
					});
					
					var cardNumber = $('#systempay_card_number').val();
					if(cardNumber.length <= 0 || !(/^\d{13,19}$/.test(cardNumber))){
						$('#systempay_card_number').addClass('invalid');
					}
					
					var cvv = $('#systempay_cvv').val();
					if(cvv.length <= 0 || !(/^\d{3,4}$/.test(cvv))) {
						$('#systempay_cvv').addClass('invalid');
					}	
					
					var currentTime  = new Date();
					var currentMonth = currentTime.getMonth() + 1;
					var currentYear  = currentTime.getFullYear();
					
					var expiryYear = $('select[name="systempay_expiry_year"] option:selected').val();
					if(expiryYear.length <= 0 || !(/^\d{4}$/.test(expiryYear)) || expiryYear < currentYear) {
						$('#systempay_expiry_year').addClass('invalid');
					}
					
					var expiryMonth = $('select[name="systempay_expiry_month"] option:selected').val();
					if(expiryMonth.length <= 0 || !(/^\d{1,2}$/.test(expiryMonth)) || (expiryYear == currentYear && expiryMonth < currentMonth)) {
						$('#systempay_expiry_month').addClass('invalid');
					}
					
					return ($('#systempay_standard').find('.invalid').length > 0) ? false : true;
				});
			});
		{/literal}
		{/if}
	</script>
{/if}

{if $systempay_multi_enabled == true}
	<p class="payment_module">
		<img width="120" src="{$base_dir_ssl}modules/systempay/images/BannerLogo2.gif" alt="Systempay" />
		<br />{$systempay_multi_title}
   	</p>
	
	<form action="{$link->getModuleLink('systempay', 'redirect')}" method="POST" name="systempay_multi" style="padding-left: 20px;">
		<input type="hidden" name="systempay_payment_type" value="multi" />
			
		{if {$systempay_multi_options|@count} == 1}
			{foreach from=$systempay_multi_options key="key" item="option"}
				<div style="margin-bottom:10px;">
			   		<input type="hidden" id="systempay_opt_{$key}" name="systempay_opt" value="{$key}" style="vertical-align: middle; height:20px;" />
			      	<label for="systempay_opt_{$key}" style="font-weight: bold;">{$option.label}</label>
			    </div>
	 		{/foreach}	 
		{else}
			{assign var=first value=true}
			{foreach from=$systempay_multi_options key= "key" item= "option"}
				<div style="margin-bottom:10px;">
					{if $first == true}
				   		<input type="radio" id="systempay_opt_{$key}" name="systempay_opt" value="{$key}" style="vertical-align: middle; height:20px;" checked="checked" />
			        	{assign var=first value=false}
			      	{else}
						<input type="radio" id="systempay_opt_{$key}" name="systempay_opt" value="{$key}" style="vertical-align: middle; height:20px;"/>
			    	{/if}
			      	<label for="systempay_opt_{$key}" style="font-weight: bold;">{$option.label}</label>
		      	</div>
    		{/foreach}
 		{/if}
 		
 		<p class="clear"> </p>
    		<input type="submit" name="submit" value="{l s='Pay now' mod='systempay'}" class="button" />
    	<p class="clear"> </p>
 	</form>
{/if}