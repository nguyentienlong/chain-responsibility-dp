<?php
require_once './vendor/autoload.php';

use Longka\PaymentHandler;
use Longka\ShippingHandler;
use Longka\CustomerInfoHandler;

$handler = new CustomerInfoHandler();
$paymentHandler = new PaymentHandler();
$paymentHandler->setNextHandler(new ShippingHandler());
$handler->setNextHandler($paymentHandler);

$handler->handle();
