<?php
require_once './vendor/autoload.php';

use Longka\PaymentHandler;
use Longka\ShippingHandler;
use Longka\CustomerInfoHandler;
use Longka\BikeShippingHandler;
use Longka\DroneShippingHandler;

switch ($argv[1]) {
    case 'bike':
        $shippingHandler = BikeShippingHandler()
        break;

    case 'drone':
        $shippingHandler = DroneShippingHandler()
        break;

    default:
        $shippingHandler = new ShippingHandler();
}

$handler = new CustomerInfoHandler();
$paymentHandler = new PaymentHandler();
$paymentHandler->setNextHandler($shippingHandler);
$handler->setNextHandler($paymentHandler);

$handler->handle();
