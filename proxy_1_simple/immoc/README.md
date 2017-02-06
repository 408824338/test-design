# 代理模式  (proxy)

1.在客户端与实体之间建立一个代理对象(proxy),客户端对实体进行操作全部委派给代理对象,隐藏实体的具体实现细节.

2.Proxy还可以与业务代码分离,部署到另外的服务器.业务代码中通过RPC来委派任务

##

###传统使用
```
$db = \IMooc\Factory::getDatabase('slave');
$info = $db->query("select name from user where IDENTITY = 1 limit 1");

$db1 = \IMooc\Factory::getDatabase('master');
$db1->query("update user name = 'lili' where id = 1 limit 1");
```

###代理模式
``` 
$proxy = new \IMooc\Proxy();
$proxy->getUserName(2);
$proxy->setUserName(3,'lili');

``` 
