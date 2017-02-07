<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 16:27
 */


$config = [
   'home'=>[
       'decorator'=>[
           'App\Decorator\Template',
           'App\Decorator\Json',
       ]
   ]
];

return $config;