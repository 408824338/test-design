<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/4
 * Time: 13:57
 */

namespace IMooc;


class AllUser implements \Iterator {
    protected $ids;
    protected $data = [];
    protected $index;

    function __construct() {
        $db = Factory::getDatabase();
        $result = $db->query("select id from d_user");
        $this->ids = $result->fetchAll();
    }

    function current() {
       $id = $this->ids[$this->index]['id'];
       return Factory::getUser($id);

    }

    function next() {
       $this->index++;
    }

    function valid() {
        return $this->index<count($this->ids);
    }

    function rewind() {
       $this->index=0;
    }

    function key() {
       return $this->index;
    }

}