<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/3/5
 * Time: 0:49
 */

/**
 *  定义的类里，要依赖的类，定义变量保存，在外面new()的时候带进来
 */
class Bim{
    public function doSomething(){
        echo __METHOD__,'|';
    }
}

class Bar{
    private $bim;
    public function __construct(Bim $bim) {
        $this->bim = $bim;
    }
    public function doSomething(){
        $this->bim->doSomething();
        echo __METHOD__,'|';
    }
}


class Foo{
    private $bar;
    public function __construct(Bar $bar) {
        $this->bar = $bar;
    }

    public function doSomething(){
        $this->bar->doSomething();
        echo  __METHOD__;
    }
}

$foo = new Foo(new Bar(new Bim()));
$foo->doSomething();  //Bim::doSomething|Bar::doSomething|Foo::doSomething










