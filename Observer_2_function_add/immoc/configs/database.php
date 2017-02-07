<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 16:40
 */

$config = [
    'master' => [
        'type' => 'mysql',
        'host' => '127.0.0.1',
        'port' => 3306,
        'user'=>'root',
        'password' => '123456',
        'dbname' => 'test'
    ],
    'slave' => [
        'slave1' => [
            'type' => 'mysql',
            'host' => '127.0.0.1',
            'port' => 3306,
            'user'=>'root',
            'password' => '123456',
            'dbname' => 'slave1'
        ],
        'slave2' => [
            'type' => 'mysql',
            'host' => '127.0.0.1',
            'port' => 3306,
            'user'=>'root',
            'password' => '123456',
            'dbname' => 'slave2'
        ],
    ],

];

return $config;