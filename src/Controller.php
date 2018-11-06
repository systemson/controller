<?php

namespace Amber\Controller;

use Amber\Controller\ControllerContract;

/**
 * Wrapper class for Action Controllers
 * 
 * @todo MUST add support for after and before action methods.
 */
class Controller
{
    public static function __callStatic($method, $args)
    {
        
    }
}
