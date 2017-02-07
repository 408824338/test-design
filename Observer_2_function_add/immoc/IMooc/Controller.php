<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 6:33
 */

namespace IMooc;


abstract class Controller {

    protected $controller_name;
    protected $view_name;

    function __construct($controller_name, $view_name) {
        $this->controller_name = $controller_name;
        $this->view_name = $view_name;
    }

    function assign($key, $value) {
        $this->data[$key] = $value;
    }

    function display($file = '') {
        if (empty($file)) {
            $file = strtolower($this->controller_name) . '/' . $this->view_name . '.php';
        }
        $path = TEMPLATE_DIR . '/' . $file;
        extract($this->data);
        include $path;
    }


}