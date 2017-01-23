<?php
namespace IMooc\Database;

use IMooc\IDatabase;

/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/17
 * Time: 7:28
 */
class MySQLi implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
       $conn = mysqli_connect($host,$user,$passwd,$dbname);
       $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }

}