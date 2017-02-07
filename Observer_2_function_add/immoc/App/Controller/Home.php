<?php

namespace App\Controller;
use IMooc\Factory;

/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 19:14
 */
class Home extends \IMooc\Controller {

    /**
     * 访问如下地址
     * http://127.0.0.1:83/home/index?app=html
     * http://127.0.0.1:83/home/index?app=json
     * @author cmk
     * @return array
     */
    function index() {
        $model = Factory::getModel('User');
        $user_id = $model->create(['name'=>'cmk','mobile'=>'18987878787']);
        $this->assign('name', 'cmk');
        $this->display();
    }



}