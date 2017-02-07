<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 14:49
 */

$config = [
    'user' => [
        'observer' => [
            'App\Observer\UserAdd1',
            'App\Observer\UserAdd2',
            'App\Observer\UserAdd3',
            //'App\Observer\UserAdd4',
        ]
    ]
];

return $config;