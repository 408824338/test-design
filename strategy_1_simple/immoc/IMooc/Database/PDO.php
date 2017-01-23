<?php
namespace IMooc\Database;

use IMooc\IDatabase;
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/17
 * Time: 7:29
 */
class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
       $conn = new \PDO("mysql:host={$host};dbname={$dbname}",$user,$passwd);
       $this->conn = $conn;
    }
    function query($sql)
    {
       return $this->conn->query($sql);
    }

    function close()
    {
      unset($this->conn);
    }

}