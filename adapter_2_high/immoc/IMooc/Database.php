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
    private static $private = 'PDO';   // 调用的方式有 MySQL MySQLi  PDO

    protected static $db;

    private function __construct()
    {
    }

    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            switch (self::$private) {
                case 'MySQL';
                    self::$db = new IMooc\Database\MySQL();
                    return self::$db;
                    break;

                case 'MySQLi';
                    self::$db = new IMooc\Database\MySQLi();
                    return self::$db;
                    break;
                case 'PDO';
                    self::$db = new Database\PDO();
                    self::$db ->connect('127.0.0.1','root','123456','test');
                   return self::$db;
                    break;
            }
        }

    }

}