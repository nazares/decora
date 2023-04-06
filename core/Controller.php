<?php

/**
 * User: nazareS
 * Date: 5/07/2023
 * Time: 5:12 PM
 */

namespace app\core;

/**
 * Class Controller
 * 
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\core
 */
class Controller
{
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
