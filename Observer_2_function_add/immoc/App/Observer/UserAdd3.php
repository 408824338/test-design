<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 14:43
 */

namespace App\Observer;


use IMooc\IObserver;

class UserAdd3 implements IObserver {

    function update() {
        echo "注册社保<br />";
    }
}