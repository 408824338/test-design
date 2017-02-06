<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/19
 * Time: 7:09
 */

namespace IMooc;


interface IDatabase{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}