<?php

namespace App;

class Service 
{
    function callExternalService($param)
    {
        $externalService = new Service\External();

        $externalService->sendSomething($param);

        return $externalService->getSomething();
    }
}
