<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 16:45
 */

namespace IMooc;


class Application {
    public $base_dir;
    public $config;
    protected static $instance;

    protected function __construct() {
        $this->config = new Config(CONFIG);
    }

    static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    function dispatch(){

    }


}