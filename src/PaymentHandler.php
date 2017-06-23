<?php

namespace Longka;

class PaymentHandler extends AbstractCheckoutHandler
{
    public function handle()
    {
        echo "handling payment" . PHP_EOL;

        if ($this->nextHandler) {
            $this->nextHandler->handle();
        }
    }
}
