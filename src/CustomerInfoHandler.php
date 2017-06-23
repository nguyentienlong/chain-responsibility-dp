<?php

namespace Longka;

class CustomerInfoHandler extends AbstractCheckoutHandler
{
    public function handle()
    {
        echo 'handling customer info' . PHP_EOL;

        if ($this->nextHandler) {
            $this->nextHandler->handle();
        }
    }
}
