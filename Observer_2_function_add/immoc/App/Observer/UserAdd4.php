<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 14:44
 */

namespace App\Observer;


use IMooc\IObserver;

class UserAdd4 implements IObserver {

    function update() {
        echo "其它逻辑<br />";
    }
}