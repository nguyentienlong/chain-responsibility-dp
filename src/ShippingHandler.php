<?php

namespace Longka;

class ShippingHandler extends AbstractCheckoutHandler
{
    public function handle()
    {
        echo "handling shipping" . PHP_EOL;

        if ($this->nextHandler) {
            $this->nextHandler->handle();
        }
    }
}
