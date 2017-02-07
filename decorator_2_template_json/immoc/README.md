## 装饰器模式 (Decorator)

1.可以动态的添加修改类的功能

2.一个类提供了一项功能,如果要在修改并添加额外的功能,传统的编辑模式,需要写一个子类继承它,并重新实现类的方法
 
3.使用装饰器模式,仅需在运行时添加一个装饰器对象即可实现,可以实现最大的灵活性



##使用装饰器模式实现权限验证,模版渲染,JSON串

###apache该的配置
```
<VirtualHost *:83>
ServerAdmin webmaster@localhost
ServerName 2sdfsd
DocumentRoot D:\web&database_backup\test\design\decorator_2_template_json\immoc
<Directory "D:\web&database_backup\test\design\decorator_2_template_json\immoc">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
</VirtualHost>
```
### template与json的切换
http://127.0.0.1:83/home/index?app=html<br/>
http://127.0.0.1:83/home/index?app=json<br/>
路径 decorator_2_template_json/immoc/App/Controller/Home.php
```
    function index(){
        return ['userid'=>1,'name'=>'cmk'];
    }
```

### 使用template
http://127.0.0.1:83/home/index<br />
径 decorator_2_template_json/immoc/App/Controller/Home.php
```
    function index(){
         $this->assign('name','cmk');
         $this->display();
    }
```


