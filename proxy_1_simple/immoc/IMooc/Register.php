<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/17
 * Time: 7:07
 */

namespace IMooc;


class Register {
    protected static $objects;

    static function set($alias, $object) {
        self::$objects[$alias] = $object;
    }

    static function get($key) {
        //判断是否有
        if(!isset(self::$objects[$key])){
            return false;
        }
        return self::$objects[$key];
    }

    function _unset($alias) {
        unset(self::$objects[$alias]);
    }
}