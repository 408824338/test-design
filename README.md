# test-design 简单设计模式 练练手

/adapter_1_simple     #适配器-简单

/adapter_2_high       #适配器 - 升级一些,即在调用的时候,不必要指定连接的类型,通过配置文件设置即可

/strategy_1_simple    #策略模式

/mapping_1_simple     #映射模式   该例子 包括 工厂模式+注册模式

/Observer_1_simple    #观察者模式<br/>
/Observer_2_function_add    #观察者模式 例子模块化(通过配置来控制),如新员工加入 1,分配工位 2.分配电脑 3.其它逻辑 (等于独立的线程,可以开关,添加/删除,自由组)

/clone_1_simple       #原型模式

/decorator_1_simple   #装饰者模式<br/>
/decorator_2_template_json   #装饰模式 template与json的切换  http://127.0.0.1:83/home/index?app=html或json

/iterator_1_simple    #迭代器模式

/proxy_1_simple      #代理模式   添加数据库主从选择读取与更新 <br />
/proxy_2_db      #代理模式   连接数据库时使用代理,选择主从时,不必再传参数 ,根据select来判断是读主库还是从库

/di                 #依赖注入容器(dependency injection container)
/di/di_1_simple.php             #原始方法 一个类依赖另外一个类,在每个类里实例化
/di/di_2_zb.php                 # 定义的类里，要依赖的类，定义变量保存，在外面new()的时候带进来
/di/di_3_container.php          #对di_2_zb.php加入容器(Container)来表示 
/di/di_4_update.php             # 上例升级的解析
/di/di_5_final.php`             #自动绑定（自动解析）高级





















