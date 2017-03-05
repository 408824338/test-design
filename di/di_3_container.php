<?php

/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/3/5
 * Time: 0:57
 */
class Bim {
    public function doSomething() {
        echo __METHOD__, '|';
    }
}

class Bar {
    private $bim;

    public function __construct(Bim $bim) {
        $this->bim = $bim;
    }

    public function doSomething() {
        $this->bim->doSomething();
        echo __METHOD__, '|';
    }
}


class Foo {
    private $bar;

    public function __construct(Bar $bar) {
        $this->bar = $bar;
    }

    public function doSomething() {
        $this->bar->doSomething();
        echo __METHOD__;
    }
}


class Container {
    private $s = [];

    /**
     * 在给不可访问属性赋值时，__set() 会被调用。读取不可访问属性的值时，__get() 会被调用。
     */
    function __set($k, $c) {
        $this->s[$k] = $c;
    }

    function __get($k) {
        return $this->s[$k]($this);
    }
}

$c = new Container();
$c->bim = function () {
    return new Bim();
};

$c->bar = function ($c) {
    return new Bar($c->bim);
};

$c->foo = function ($c) {
    return new Foo($c->bar);
};

$foo = $c->foo;
$foo->doSomething(); //Bim::doSomething|Bar::doSomething|Foo::doSomething












