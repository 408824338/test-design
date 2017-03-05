<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/3/5
 * Time: 0:42
 */

/**
 *
 *   一个类调用依赖另外一个类
 */

//定义一个类
class Bim{
    public function doSomething(){
        echo __METHOD__,'|';
    }
}

//定义一个类调用 Bim()
class Bar{
    public function doSomething(){
        $bim = new Bim();
        $bim->doSomething();
        echo __METHOD__,'|';
    }
}

//定义一个类调用Bar()
class Foo{
    public function doSomething(){
        $bar = new Bar();
        $bar->doSomething();
        echo __METHOD__;
    }
}

$foo = new Foo();
$foo->doSomething(); //Bim::doSomething|Bar::doSomething|Foo::doSomething












