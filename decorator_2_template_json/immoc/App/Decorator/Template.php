<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 9:24
 */

namespace App\Decorator;


use IMooc\IDecorator;

class Template implements IDecorator {


    protected $controller;

    function beforeRequest($controller) {
        $this->controller = $controller;
    }

    function afterRequest($return_value) {
        if (isset($_GET['app'])) {
            if ($_GET['app'] == 'html') {
                foreach ($return_value as $k => $v) {
                    $this->controller->assign($k, $v);
                }
                $this->controller->display();
            }
        }
    }


}