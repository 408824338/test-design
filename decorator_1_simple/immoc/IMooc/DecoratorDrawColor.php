<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/3
 * Time: 23:18
 */

namespace IMooc;


class DecoratorDrawColor implements DecoratorInterface {

    protected $color;
    function __construct($color='red') {
        $this->color = $color;
    }

    function beforeDraw() {
      echo "<div style='color:{$this->color};'>";
    }
    function afterDraw() {
       echo "</div>";
    }
}