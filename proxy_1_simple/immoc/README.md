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

### 读取配置文件数据
```
$config = new \IMooc\Config(__DIR__.'/configs');
 var_dump($config['controller']);
```
### 读配置文件,设置主从
```
#读,有两个从库 
$db = \IMooc\Factory::getDatabase('slave');
$rs = $db->query("select name from d_user where id = 1 limit 1");
while ($row = $rs->fetch()) {
    var_dump($row);

}
#更新主库 
$db1 = \IMooc\Factory::getDatabase('master');
$_time =time();
$resut = $db1->query("update d_user set  name = 'lilia',regtime={$_time} where id = 1 limit 1");
var_dump($resut);
```


