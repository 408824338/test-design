<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 14:47
 */

namespace IMooc;


class Proxy implements  IUserProxy {

    function getUserName($id) {
       $db = Factory::getDatabase('slave');
       $db->query("select name from user where id = {$id} limit 1");

    }

    function setUserName($id, $name) {
        $db = Factory::getDatabase('master');
        $db->query("update user set name={$name} where id = {$id} limt 1");
    }

}