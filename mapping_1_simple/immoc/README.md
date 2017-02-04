# 映射模

1.数据对象映射模式,是将对象和数据存储映射起来,对一个对象的操作会映射为对数据存储的操作

2.在代码中实现数据对象映射模式,我们将实现一个ORM类，将复杂的SQL语句映射成对象属性的操作

3.结合使用数据对象映射模式，工厂模式，注册模式

###传统方法
```
class Page {
    public function index() {
      $user = new IMooc\User(1); 
        $user->name = 'rango';
        $this->test();
    }

    public function test() {
     $user = new IMooc\User(1);
        $user->mobile = '18911223344';
        echo 'ok';
    }
}

$page = new Page();
$page->index();
```
###映射方法
```
class Page {
    public function index() {
        $user = IMooc\Factory::getUser(1); 
        $user->name = 'rango';
        $this->test();
    }

    public function test() {
        $user = IMooc\Factory::getUser(1);
        $user->mobile = '18911223344';
        echo 'ok';
    }
}

$page = new Page();
$page->index();
```

###上面的输出为
```

   由上面的两个var_dump($use)输出
  object(IMooc\User)#2 (5) {
  ["id"]=> string(1) "1"
  ["name"]=>string(5) "rango"
  ["mobile"]=>string(11) "18911223344"
  ["regtime"]=>string(10) "1485480098"
  ["db":protected]=>object(IMooc\Database\PDO)#3 (1) {
  ["conn":protected]=>
  object(PDO)#4 (0) { }
   }
  }
  object(IMooc\User)#2 (5) {
  ["id"]=>string(1) "1"
  ["name"]=>string(5) "rango"
  ["mobile"]=>string(11) "18911223344"
  ["regtime"]=>string(10) "1485480098"
  ["db":protected]=>object(IMooc\Database\PDO)#3 (1) {
  ["conn":protected]=>object(PDO)#4 (0) { }
  }
  }
 ```



