<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/27
 * Time: 8:19
 */

namespace IMooc;


class User {
    protected $id;
    protected $data;
    protected $db;
    protected $change = false;

    function __construct($id) {
        $this->db = Database::getInstance(); //获取 $db 方法1
        // $this->db =Database::getInstance(); //获取 $db 方法2
        $res = $this->db->query("select * from d_user where id = {$id} limit 1");
        $this->data = $res->fetch(\PDO::FETCH_ASSOC);
        $this->id = $id;
    }

    function __get($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }

    function __set($key, $value) {
        $this->data[$key] = $value;
        $this->change = true;
    }

    function __destruct() {
        /*
         #方法1
        $sql = "update d_user set name='{$this->name}',mobile='{$this->mobile}',regtime='{$this->regtime}'";
        $sql .= " where id={$this->id} limit 1";
        $this->db->query($sql);
        */

        if ($this->change) {
            foreach ($this->data as $k => $v) {
                $fields[] = "$k='{$v}'";
            }
            $sql ="update d_user set " . implode(', ', $fields) . " where id = {$this->id} limit 1";
            // echo $sql."<br />";
            $this->db->query($sql);
        }
    }

}