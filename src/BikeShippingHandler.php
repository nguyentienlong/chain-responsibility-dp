<?php

namespace Longka;

class BikeShippingHandler extends AbstractCheckoutHandler
{
    public function handle()
    {
        echo "bike handling shipping" . PHP_EOL;

        if ($this->nextHandler) {
            $this->nextHandler->handle();
        }
    }
}
