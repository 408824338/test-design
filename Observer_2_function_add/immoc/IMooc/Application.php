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

    static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @author cmk
     * URL分发
     */
    function dispatch() {
        // var_dump($_SERVER);exit;
        $url = $_SERVER['PATH_INFO']; // 如 localhost/home/index?app=json
        list($c, $v) = explode('/', trim($url, '/'));
        $c_low = strtolower($c);
        $c = ucwords($c);

        $class = '\\App\\Controller\\' . $c;
        $obj = new $class($c, $v);
        $controller_config = $this->config['controller'];
        $decorators = [];

        if (isset($controller_config[$c_low]['decorator'])) {
            $conf_decorator = $controller_config[$c_low]['decorator'];
            foreach ($conf_decorator as $class) {
                $decorators[] = new $class;
            }
        }

        foreach ($decorators as $decorator) {
            $decorator->beforeRequest($obj);
        }

        // echo $v;exit;
        $return_value = $obj->$v();

        foreach ($decorators as $decorator) {
            $decorator->afterRequest($return_value);
        }

    }


}