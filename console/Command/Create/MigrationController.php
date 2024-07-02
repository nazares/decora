<?php

namespace Console\Command\Create;

use Clipper\Command\CommandController;

// use helpers\Color;

class MigrationController extends CommandController
{
    public function handle()
    {
        $args = $this->getArgs();
        $path = sprintf(
            "%s/migrations/migration_%s_%s.php",
            $this->getApp()->config->rootPath,
            date('Y_m_d_his'),
            $args[3]
        );
        $className = basename($path, '.php');
        var_dump($path, $className);

        $content = <<<FILE
        <?php

        class $className
        {
            public function up()
            {
                #...[code here]
            }

            public function down()
            {
                #...[code here]
            }
        }
        FILE;

        file_put_contents($path, $content);


        // var_dump($param);
    }
}
