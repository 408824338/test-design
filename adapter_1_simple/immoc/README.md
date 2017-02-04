# 适配器模式

1.适配器模式,可以将截然不同的凼数接口封装成统一的API

2.实际应用举例，PHP的数据库操作有mysql,mysqli,pdo3种,可以用适配器模式统一成一致.类似的场景还有cache适配器,将
memcache,redis,file,apc等不同的缓存函数,统一成一致



###调用方法
```
$db = new IMooc\Database\PDO();
$db->connect('127.0.0.1','root','123456','test');
//$arr = $db->query('show databases');
$rs = $db->query('select * from dj_check_sheet');
while($row = $rs -> fetch()){
    // print_r($row);
}
$db->close();
```
