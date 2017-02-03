<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/3
 * Time: 23:04
 */

namespace IMooc;


interface DecoratorInterface {
    function beforeDraw();
    function afterDraw();
}