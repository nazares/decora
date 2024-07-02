<?php

namespace Console\Command\Serve;

use Clipper\Command\CommandController;
use helpers\Color;

class DefaultController extends CommandController
{
    public function handle()
    {
        $params = $this->getParams();

        var_dump($params);

        $public = $this->getApp()->config->rootPath;
        echo setColor("\nServer Started", Color::White, Color::Blue);
        echo sprintf("\non %s\n", $public);

        echo "Press Ctrl+C to stop the server";

        exec("php -S  localhost:0 -t {$public}");
    }
}
