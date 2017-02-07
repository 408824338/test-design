<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 19:22
 */

namespace IMooc;


class Model {
    protected $observers = [];
    function __construct() {
        $name = strtolower(str_replace('App\Model\\','',get_class($this)));
        if(!empty(Application::getInstance()->config['model'][$name]['observer'])){
            $observers = Application::getInstance()->config['model'][$name]['observer'];
            foreach ($observers as $class){
                $this->observers[] = new $class;
            }
        }
    }

    function nofify($event){
        foreach ($this->observers as $observer){
            $observer->update($event);
        }
    }
}