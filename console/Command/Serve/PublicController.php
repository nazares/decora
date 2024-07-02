<?php

namespace Console\Command\Serve;

use Clipper\Command\CommandController;
use helpers\Color;

class PublicController extends CommandController
{
    public function handle()
    {
        $params = $this->getParams();

        var_dump($params);

        $public = $this->getApp()->config->rootPath . '/public';
        echo setColor("\nServer Started", Color::White, Color::Blue);
        echo sprintf("\non %s\n", $public);

        echo "\nPress Ctrl+C to stop the server\n";

        $addr = '127.0.0.1';

        $socket = \socket_create_listen(0);
        \socket_getsockname($socket, $addr, $port);
        \socket_close($socket);

        exec("
        php -S 127.0.0.1:{$port} -c php.ini -t {$public} &
        npx -y five-server@latest --port=5500 --open=http://localhost:{$port} && fg");
    }
}
