<?php

define('BASEDIR', __DIR__);
define('CONFIG', BASEDIR . '/configs');
include BASEDIR . '/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');

//
$db = \IMooc\Factory::getDatabase('slave');
$rs = $db->query("select name from d_user where id = 1 limit 1");
while ($row = $rs->fetch()) {
    var_dump($row);

}
$db1 = \IMooc\Factory::getDatabase('master');
$_time =time();
$resut = $db1->query("update d_user set  name = 'lilia',regtime={$_time} where id = 1 limit 1");
var_dump($resut);

// $config = new \IMooc\Config(__DIR__.'/configs');
// var_dump($config['database']);