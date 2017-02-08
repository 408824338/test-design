<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/7
 * Time: 15:45
 */

namespace IMooc\Database;


use IMooc\Factory;

class Proxy {

    function query($sql) {
        if (substr($sql, 0, 6) == 'select') {

            echo "读操作:{$sql}<br />";
            return Factory::getDatabase('slave')->query($sql);
        } else {
            echo "写操作:{$sql}<br />";
            return Factory::getDatabase('master')->query($sql);
        }
    }

}