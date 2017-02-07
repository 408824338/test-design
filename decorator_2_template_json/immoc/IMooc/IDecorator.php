<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 9:29
 */

namespace IMooc;


interface IDecorator {

    function beforeRequest($controller);

    function afterRequest($return_value);

}