<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 19:21
 */

namespace App\Model;


use IMooc\Factory;

class User extends \IMooc\Model {


    function getInfo($id) {
        return Factory::getDatabase('slave')->query("select * from d_user where id ={$id} limit 1")->fetch_all();
    }


    /**
     * 绑定方法,执行 "观察者模式"
     * @param $user
     * @author cmk
     * @return int
     */
    function create($user) {
        $user_id = 1;
        $this->notify(1);
        return true;
    }

}