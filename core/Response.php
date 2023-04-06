<?php

namespace app\core;

/**
 * Class Response
 * 
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\core
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}
