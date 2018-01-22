<?php

namespace Longka;

class DroneShippingHandler extends AbstractCheckoutHandler
{
    public function handle()
    {
        echo "Drone handling shipping" . PHP_EOL;

        if ($this->nextHandler) {
            $this->nextHandler->handle();
        }
    }
}
