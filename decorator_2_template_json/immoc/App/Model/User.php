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

    function getInfo($id){
        return Factory::getDatabase('slave')->query("select * from d_user where id ={$id} limit 1")->fetch_all();
    }

    function create($user){

    }

}