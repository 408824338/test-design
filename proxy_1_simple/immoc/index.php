<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');


$proxy = new \IMooc\Proxy();
$proxy->getUserName(2);
$proxy->setUserName(3,'lili');


