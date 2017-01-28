<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/27
 * Time: 8:19
 */

namespace IMooc;


class User {
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;

    function __construct($id) {
        $this->db = new \IMooc\Database\PDO();
        $this->db->connect('127.0.0.1', 'root', '123456', 'test');
        $res = $this->db->query("select * from d_user limit 1");
        $data = $res->fetch(\PDO::FETCH_ASSOC);
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];

    }

    function __destruct() {
        $sql = "update d_user set name='{$this->name}',mobile='{$this->mobile}',regtime='{$this->regtime}'";
        $sql .=" where id={$this->id} limit 1";
        $this->db->query($sql);

    }

}