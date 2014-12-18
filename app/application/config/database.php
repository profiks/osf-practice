<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
'default' => array
(
    'type'       => 'postgresql',
    'connection' => array(
        'dsn'        => 'pgsql:host=localhost;dbname=/* name of your database */',
        'hostname'   => 'localhost',
        'database'   => 'name of your database',
        'username'   => 'database user',
        'password'   => 'database password',
        'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => FALSE,
    'profiling'    => TRUE,
),
);