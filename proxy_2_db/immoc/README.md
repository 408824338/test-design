# 代理模式  (proxy)

1.在客户端与实体之间建立一个代理对象(proxy),客户端对实体进行操作全部委派给代理对象,隐藏实体的具体实现细节.

2.Proxy还可以与业务代码分离,部署到另外的服务器.业务代码中通过RPC来委派任务

##例子 主从库,没有必要再传参数,通过select来判断
原来 
```
$db = Factory::getDatabase('master');
$db = Factory::getDatabase('slave');\
```
现在 
```
$db = Factory::getDatabase();
```

###apache该的配置
```
<VirtualHost *:83>
ServerAdmin webmaster@localhost
ServerName 2sdfsd
DocumentRoot D:\web&database_backup\test\design\proxy_2_db\immoc
<Directory "D:\web&database_backup\test\design\proxy_2_db\immoc">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
</VirtualHost>
```
###调用的代码
访问 http://127.0.0.1:83/home/index2<br/>
路径 proxy_2_db/immoc/App/Controller/Home.php<br />
注:会有BUG 如果第一次是查询的,然后实例的对象会保存起来,接下来,如果是非查询的话,则会影响到从库的数据会变动!
```
    function index2() {

        $db = Factory::getDatabase();

        //输出内容
        $rs = $db->query("select name from d_user");
        while ($row = $rs->fetch()) {
            var_dump($row);

        }
       //更新
       $rs = $db->query("update d_user set name='aaba' where id =1 ");
        var_dump($rs);


        //$db->query("delete from d_user ")

    }
```
### 输出 
```
读操作:select name from d_user
array(2) { ["name"]=> string(4) "aaba" [0]=> string(4) "aaba" } array(2) { ["name"]=> string(4) "xxx1" [0]=> string(4) "xxx1" } array(2) { ["name"]=> string(5) "yyyy1" [0]=> string(5) "yyyy1" } 写操作:update d_user set name='aaba' where id =1 
object(PDOStatement)#9 (1) { ["queryString"]=> string(42) "update d_user set name='aaba' where id =1 " }
```


