<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');


//IMooc\Factory::createDatabase();

$users = new \IMooc\AllUser();
foreach ($users as $user){
    var_dump($user->name);
    //测试随机更新一下指定字段
    $user->serial_no = rand(10000,90000);
}