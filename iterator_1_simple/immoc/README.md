# 迭代器模式  (iteration)

1.迭代器模式,在不需要了解内部实现的前提下,遍历一个聚合对象的内部元素

2.相比于传统的编程模式,迭代器模式可以隐藏遍历元素的所需的操作

##本例中通过迭代器遍历输出所有的用户 

##难点
1.在AllUser.php中实现Iterator接口

current()—返回当前元素值,<br/>
key()—返回当前元素的键值,<br/>
next()—下移一个元素,<br/>
valid()—判定是否还有后续元素, 如果有, 返回true,<br/>
rewind()—移到首元素.<br/>


###调用方法(index.php)
```
$users = new \IMooc\AllUser();
foreach ($users as $user){
    var_dump($user->name);
    //测试随机更新一下指定字段
    $user->serial_no = rand(10000,90000);
}

``` 
