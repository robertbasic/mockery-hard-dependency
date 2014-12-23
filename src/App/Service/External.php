<?php

namespace App\Service;

class External
{
    public function getSomething()
    {
        return 'Just a return';
    }

    public function sendSomething($param)
    {
        throw new \RuntimeException('Not yet implemented!');
    }
}
