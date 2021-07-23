<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

use craft\helpers\App;

return [
    'dsn' => App::env('DB_DSN') ?: null,
    'driver' => 'mysql',
    'server' => 'localhost',
    'port' => '3306',
    'database' => 'craftblog',
    'user' => 'newuser',
    'password' => 'password',
    'schema' => 'public',
    'tablePrefix' => App::env('DB_TABLE_PREFIX'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
];
