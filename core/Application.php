<?php

namespace App\Core;

/**
 * Class Application
 *
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package App\Core
 */
class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;

    public function __construct(string $rootPath)
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

    public static function debug($statement, bool $st = true)
    {
        echo '<pre>';
        var_dump($statement);
        echo '</pre>';
        if ($st) {
            exit;
        }
    }
}
