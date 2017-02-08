<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 14:42
 */

namespace App\Observer;


use IMooc\IObserver;

class UserAdd2 implements IObserver {

    function update() {
       echo "分配电脑<br />";
    }

}