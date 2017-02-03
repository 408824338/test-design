<?php
namespace IMooc;

class Canvas {
    public $data;
    protected $decorators = array();

    //Decorator
    function init($width = 20, $height = 10) {
        $data = array();
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                $data[$i][$j] = '*';
            }
        }
        $this->data = $data;
    }

    function beforeDraw() {
        foreach ($this->decorators as $decorator) {
            $decorator->beforeDraw();
        }
    }

    function afterDraw() {
        //例子使用了这样的方式！
        /*
        $decorators = array_reverse($this->decorators);
       foreach($decorators as $decorator){
           $decorator->afterDraw();
       }
        */

        foreach ($this->decorators as $decorator) {
            $decorator->afterDraw();
        }
    }

    /**
     * 接收实例化对象
     * @param DecoratorInterface $decorator
     * @author cmk
     */
    function addDecorator(DecoratorInterface $decorator) {
        $this->decorators[] = $decorator;
    }

    function draw() {
        $this->beforeDraw();
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo "<br />\n";
        }
        $this->afterDraw();
    }

    /**
     * 举例 $canvas1->rect(3,6,4,12);
     * @param $a1
     * @param $a2
     * @param $b1
     * @param $b2
     * @author cmk
     */
    function rect($a1, $a2, $b1, $b2) {
        foreach ($this->data as $k1 => $line) {
            if ($k1 < $a1 or $k1 > $a2) continue;
            foreach ($line as $k2 => $char) {
                if ($k2 < $b1 or $k2 > $b2) continue;
                $this->data[$k1][$k2] = '&ensp;';
            }
        }
    }
}

