<?php

namespace Console\Command\Help;

use Clipper\Console;
use Clipper\Command\CommandController;

class DefaultController extends CommandController
{
    /** @var  array */
    protected $commandMap = [];

    public function boot(Console $console)
    {
        parent::boot($console);
        $this->commandMap = $console->commandRegistry->getCommandMap();
    }

    public function handle()
    {
        $this->getPrinter()->info('Available Commands');

        foreach ($this->commandMap as $command => $sub) {
            $this->getPrinter()->newline();
            $this->getPrinter()->out($command, 'info_alt');

            if (is_array($sub)) {
                foreach ($sub as $subcommand) {
                    if ($subcommand !== 'default') {
                        $this->getPrinter()->newline();
                        $this->getPrinter()->out(sprintf('%s%s', '└──', $subcommand));
                    }
                }
            }
            $this->getPrinter()->newline();
        }

        $this->getPrinter()->newline();
        $this->getPrinter()->newline();
    }
}
