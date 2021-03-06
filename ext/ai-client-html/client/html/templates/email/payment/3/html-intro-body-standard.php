<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2013
 * @copyright Aimeos (aimeos.org), 2015-2018
 */

$enc = $this->encoder();
$order = $this->extOrderItem;

/// Payment e-mail intro with order ID (%1$s), order date (%2$s) and payment status (%3%s)
$msg = $this->translate( 'client', 'The payment for your order %1$s from %2$s has been refunded.' );

$key = 'pay:' . $order->getPaymentStatus();
$status = $this->translate( 'mshop/code', $key );
$format = $this->translate( 'client', 'Y-m-d' );

$string = sprintf( $msg, $order->getId(), date_create( $order->getTimeCreated() )->format( $format ), $status );


?>
<?php $this->block()->start( 'email/payment/html/intro' ); ?>
<p class="email-common-intro content-block">
	<span class="intro-thank"><?= $enc->html( nl2br( $string ), $enc::TRUST ); ?></span>
</p>
<?php $this->block()->stop(); ?>
<?= $this->block()->get( 'email/payment/html/intro' ); ?>
