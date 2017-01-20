<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/16
 * Time: 7:14
 */

namespace IMooc;



class Database
{
    private $private = 'PDO';   // 调用的方式有 MySQL MySQLi  PDO

    protected static $db;

    private function __construct()
    {
    }

    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {

            self::$db =  new IMooc\Database\PDO();
            return self::$db;
        }

    }

    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit($limit)
    {
        return $this;
    }
}