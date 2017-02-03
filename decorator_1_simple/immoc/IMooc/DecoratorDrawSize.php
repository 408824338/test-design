<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/3
 * Time: 23:52
 */

namespace IMooc;


class DecoratorDrawSize implements DecoratorInterface {

    protected $size;
    function __construct($size = '14px') {
        $this->size = $size;
    }

    function beforeDraw() {
        echo "<div style='font-size:{$this->size};'>";
    }

    function afterDraw() {
       echo "</div>";
    }

}