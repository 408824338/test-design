#观察者模式
1.观察者模式(Observer),当一个对象状态发生改变时,依赖它的对象全部会收到通知,并自动更新
 
2.场景:一个事件发生后,要执行一连串更新操作.传统的编辑方式,就是在事件的代码之后直接加入处理逻辑.当更新的逻辑增多之后
 ,代码会变得难以维护.这种方式是耦合的,侵入式的,增加新的逻辑需要修改事件主体的代码
 
3.观察者模式实现了低耦合,非侵入式的通知与更新机制

##例子 添加一新员工入职,如 分配工位/分配电脑/财务开通/人事处理/其它逻辑
上面的每个等于一个是独立模块或功能,可以添加与删除,互不影响


###apache该的配置
```
<VirtualHost *:83>
ServerAdmin webmaster@localhost
ServerName 2sdfsd
DocumentRoot D:\web&database_backup\test\design\Observer_2_function_add\immoc
<Directory "D:\web&database_backup\test\design\Observer_2_function_add\immoc">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
</VirtualHost>
```

实现过程:通过绑定一个控制器下的方法来!

###配置文件
路径 Observer_2_function_add/immoc/configs/model.php
```
    $config = [
        'user' => [
            'observer' => [
                'App\Observer\UserAdd1',
                'App\Observer\UserAdd2',
                'App\Observer\UserAdd3',
                //'App\Observer\UserAdd4',
            ]
        ]
    ];
```
###调用的代码
路径 Observer_2_function_add/immoc/App/Controller/Home.php
```
    function index() {
        $model = Factory::getModel('User');
        $user_id = $model->create(['name'=>'cmk','mobile'=>'18987878787']);
        $this->assign('name', 'cmk');
        $this->display();
    }
```
### 输出 
```
分配工位
分配电脑
注册社保
```


