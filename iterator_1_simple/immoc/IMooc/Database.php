<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/16
 * Time: 7:14
 */

namespace IMooc;


class Database {
    protected static $db;

    private static $private = 'PDO';   // 调用的方式有 MySQL MySQLi  PDO

    private function __construct() {
    }

    /**
     * 方法1
     * @author cmk
     * @return Database
     */
    /*
    static function getInstance() {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new self();
            return self::$db;
        }
    }
    */


    static function getInstance() {
        if (self::$db) {
            return self::$db;
        } else {
            switch (self::$private) {
                case 'MySQL';
                    self::$db = new Database\MySQL();
                    self::$db->connect('127.0.0.1', 'root', '123456', 'test');
                    return self::$db;
                    break;

                case 'MySQLi';
                    self::$db = new Database\MySQLi();
                    self::$db->connect('127.0.0.1', 'root', '123456', 'test');
                    return self::$db;
                    break;
                case 'PDO';
                    self::$db = new Database\PDO();
                    self::$db =self::$db->connect('127.0.0.1', 'root', '123456', 'test');
                    return self::$db;
                    break;
            }
        }

    }


    function where($where) {
        return $this;
    }

    function order($order) {
        return $this;
    }

    function limit($limit) {
        return $this;
    }
}