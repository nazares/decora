<?php

namespace Console\Command\Help;

use Clipper\Command\CommandController;

class TestController extends CommandController
{
    public function handle()
    {
        $name = $this->hasParam('user') ? $this->getParam('user') : 'World';
        $this->getPrinter()->display(sprintf("Hello, %s!", $name));

        print_r($this->getParams());
    }
}
