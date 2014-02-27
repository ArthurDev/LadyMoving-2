<?php 
#####################################################################################################
#
#					Module pour la plateforme de paiement Systempay
#						Version : 1.1 (révision 50362)
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

/*
* NOTICE OF LICENSE
*
* This source file is Licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * Instant payment notification file. Wait for Systempay payment confirmation, then validate order.
 */

require_once dirname(dirname(dirname(__FILE__))) . '/config/config.inc.php';
require_once dirname(dirname(dirname(__FILE__))) . '/init.php';

require_once(dirname(__FILE__) . '/systempay.php');

if (($cartId = Tools::getValue('vads_order_id')) && ($hash = Tools::getValue('vads_hash'))) {
	$transId = Tools::getValue('vads_trans_id');
	
	$cart = new Cart($cartId);
	
	// Cart errors
	if (!Validate::isLoadedObject($cart)) {
		die('<span style="display:none">KO-' . $transId . "=Impossible de retrouver la commande\n</span>");
	} elseif($cart->nbProducts() <= 0) {
		die('<span style="display:none">KO-' . $transId . "=Le panier a ete vide avant la redirection\n</span>");
	}
	
	// Reload shop context
	Shop::setContext(Shop::CONTEXT_SHOP, (int)$cart->id_shop);
	
	// Reload language context
	Context::getContext()->language = new Language((int)$cart->id_lang);
	
	/** @var SystempayResponse $systempayResponse */
	$systempayResponse = new SystempayResponse(
			$_POST,
			Configuration::get('SYSTEMPAY_MODE'),
			Configuration::get('SYSTEMPAY_KEY_TEST'),
			Configuration::get('SYSTEMPAY_KEY_PROD')
	);
	
	// Check the authenticity of the request
	if (!$systempayResponse->isAuthentified()) {
		die($systempayResponse->getOutputForGateway('auth_fail'));
	}
	
	// Search order in db
	$orderId = Order::getOrderByCartId($cart->id);
	
	if ($orderId == false) { // Order has not been accepted yet
		$module = new Systempay();
		
		if ($systempayResponse->isAcceptedPayment()) {
			// Payment OK
			$module->saveOrder($cart, Configuration::get('PS_OS_PAYMENT'), $systempayResponse);
			
			// Response to server
			die ($systempayResponse->getOutputForGateway('payment_ok'));
		} else {
			// Payment KO
			if(Configuration::get('SYSTEMPAY_FAILURE_MANAGEMENT') == Systempay::ON_FAILURE_SAVE) {
				// Option 1 choosen (save order)
				$orderState = $systempayResponse->isCancelledPayment() ? Configuration::get('PS_OS_CANCELED') : Configuration::get('PS_OS_ERROR');
				$module->saveOrder($cart, $orderState, $systempayResponse);
			} 
			
			die($systempayResponse->getOutputForGateway('payment_ko'));
		}
	} else {
		// Order already registered
		$order = new Order((int)$orderId);
		
		if ($order->getCurrentState() == Configuration::get('PS_OS_PAYMENT')) {
			if($systempayResponse->isAcceptedPayment()) {
				// Just display a confirmation message
				die($systempayResponse->getOutputForGateway('payment_ok_already_done'));
			} else {
				// Order saved with success status while payment failed 
				die($systempayResponse->getOutputForGateway('payment_ko_on_order_ok'));
			}
		} else {
			// Option 1 chosen (order is saved : change order state)
				
			if($systempayResponse->isAcceptedPayment()) {
				$orderState = Configuration::get('PS_OS_PAYMENT');
				$msg = 'payment_ok';
			} else {
				if($systempayResponse->isCancelledPayment()) {
					$orderState = Configuration::get('PS_OS_CANCELED');
				} else {
					$orderState = Configuration::get('PS_OS_ERROR');
				}
				$msg = 'payment_ko_already_done';
			}
			
			$order->setCurrentState($orderState);
			die($systempayResponse->getOutputForGateway($msg));
		}
	}
}

?>