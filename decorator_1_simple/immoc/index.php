<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 使用装修者模式
 */

$canvas1 =  new  \IMooc\Canvas();
$canvas1->init();
$canvas1->addDecorator(new \IMooc\DecoratorDrawColor('green'));
$canvas1->addDecorator(new \IMooc\DecoratorDrawSize('20px'));
$canvas1->rect(3,6,4,12);
$canvas1->draw();





