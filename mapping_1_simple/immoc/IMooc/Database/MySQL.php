<?php
namespace IMooc\Database;

use IMooc\IDatabase;

/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/17
 * Time: 7:28
 */
class MySQL implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
       mysql_close($this->conn);
    }
}



















