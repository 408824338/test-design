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
        $user_id = $model->create(['name' => 'cmk', 'mobile' => '18987878787']);
        $this->assign('name', 'cmk');
        $this->display();
    }


    function index2() {

        $db = Factory::getDatabase();

        //输出内容
        $rs = $db->query("select name from d_user");
        while ($row = $rs->fetch()) {
            var_dump($row);

        }
       //更新
       $rs = $db->query("update d_user set name='aaba' where id =1 ");
        var_dump($rs);


        //$db->query("delete from d_user ")

    }


}