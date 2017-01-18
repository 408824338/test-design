<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');


//IMooc\Factory::createDatabase();


$db = new IMooc\Database\PDO();
$db->connect('127.0.0.1','root','123456','test');
//$arr = $db->query('show databases');
$rs = $db->query('select * from dj_check_sheet');
while($row = $rs -> fetch()){
    print_r($row);
}
$db->close();