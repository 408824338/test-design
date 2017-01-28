<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/17
 * Time: 7:07
 */

namespace IMooc;


class Register
{
    protected static $objects;
    static function set($alias,$object){
//        var_dump($object);
        self::$objects[$alias]  = $object;
//        var_dump(self::$objects);
    }

    static function get($name){
        return self::$objects[$name];
    }
//    function _unset($alias){
//        unset(self::$objects[$alias]);
//    }
}