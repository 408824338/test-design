<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 14:46
 */

namespace IMooc;


interface IUserProxy {
    function getUserName($id);

    function setUserName($id, $name);
}