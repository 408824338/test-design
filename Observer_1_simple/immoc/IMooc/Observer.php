<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/28
 * Time: 20:16
 */

namespace IMooc;


interface Observer {

    function update($event_info = null);
}