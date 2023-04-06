<?php

namespace app\core;

/**
 * Class Application
 *
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\core
 */
class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    /**
     * Get the value of controller
     * @return \app\core\Controller
     */
    public function getController(): \app\core\Controller
    {
        return $this->controller;
    }

    /**
     * Set the value of controller
     *
     * @param \app\core\Controller $controller
     */
    public function setController(\app\core\Controller $controller): void
    {
        $this->controller = $controller;
    }
}
