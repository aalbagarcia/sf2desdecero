<?php

require_once __DIR__.'/HelloKernel.php';

use Symfony\Framework\Cache\Cache;

class HelloCache extends Cache
{
    protected function getOptions()
    {
        return array();
    }
}
