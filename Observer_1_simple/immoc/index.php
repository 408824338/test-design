<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');


//IMooc\Factory::createDatabase();

class Event extends \IMooc\EventGenerator {
    function trigger(){
        echo "Event<br />";
        $this->notify();
    }
}

class Observer1 implements \IMooc\Observer{
    function update($event_info = null) {
       echo "逻辑1<br />";
    }
}

class Observer2 implements \IMooc\Observer{
    function update($event_info = null) {
       echo "逻辑2<br />";
    }
}

$event =  new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event ->trigger();