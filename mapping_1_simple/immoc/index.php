<?php

define('BASEDIR', __DIR__);
include BASEDIR . '/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');


class Page {
    public function index() {
//        $user = new IMooc\User(1);  #方法1

        $user = IMooc\Factory::getUser(1); #方法2
        $user->name = 'rango';
//        var_dump($user);
        $this->test();
    }

    public function test() {
//        $user = new IMooc\User(1);#方法1
        $user = IMooc\Factory::getUser(1);#方法2

        $user->mobile = '18911223344';
//        var_dump($user);
        echo 'ok';
    }
}

$page = new Page();
$page->index();


/**
 *  由上面的两个var_dump($use)输出
 * object(IMooc\User)#2 (5) {
 * ["id"]=>
 * string(1) "1"
 * ["name"]=>
 * string(5) "rango"
 * ["mobile"]=>
 * string(11) "18911223344"
 * ["regtime"]=>
 * string(10) "1485480098"
 * ["db":protected]=>
 * object(IMooc\Database\PDO)#3 (1) {
 * ["conn":protected]=>
 * object(PDO)#4 (0) {
 * }
 * }
 * }
 * object(IMooc\User)#2 (5) {
 * ["id"]=>
 * string(1) "1"
 * ["name"]=>
 * string(5) "rango"
 * ["mobile"]=>
 * string(11) "18911223344"
 * ["regtime"]=>
 * string(10) "1485480098"
 * ["db":protected]=>
 * object(IMooc\Database\PDO)#3 (1) {
 * ["conn":protected]=>
 * object(PDO)#4 (0) {
 * }
 * }
 * }
 */
