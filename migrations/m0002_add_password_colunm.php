<?php

class m0002_add_password_colunm
{
    public function up()
    {
        $db = \nazares\decoracore\Application::$app->db;
        $db->pdo->exec("ALTER TABLE `users` ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    public function down()
    {
        $db = \nazares\decoracore\Application::$app->db;
        $db->pdo->exec("ALTER TABLE `users` DROP COLUMN `password`");
    }
}
