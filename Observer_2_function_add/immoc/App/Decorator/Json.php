<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 12:18
 */

namespace App\Decorator;


use IMooc\IDecorator;

class Json implements IDecorator {

    function beforeRequest($controller) {
        // TODO: Implement beforeRequest() method.
    }

    function afterRequest($return_value) {
        if (isset($_GET['app'])) {
            if ($_GET['app'] == 'json') {
                echo json_encode($return_value);
            }
        }
    }

}