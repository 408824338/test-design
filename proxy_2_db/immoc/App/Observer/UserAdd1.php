<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 14:41
 */

namespace App\Observer;


use IMooc\IObserver;

class UserAdd1 implements IObserver {

    function update() {
        echo '分配工位' . "<br />";
    }

}