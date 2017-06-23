<?php

namespace Longka;

abstract class AbstractCheckoutHandler
{
    protected $nextHandler;

    public function setNextHandler(AbstractCheckoutHandler $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    public abstract function handle();
}
