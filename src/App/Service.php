<?php

namespace App;

class Service 
{
    public $externalService;

    function callExternalService($param)
    {
        $this->externalService = new Service\External();

        $this->externalService->sendSomething($param);

        return $this->externalService->getSomething();
    }
}
