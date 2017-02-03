# 装饰器模式 (Decorator)

1.可以动态的添加修改类的功能
2.一个类提供了一项功能,如果要在修改并添加额外的功能,传统的编辑模式,需要写一个子类继承它,并重新实现类的方法
3.使用装饰器模式,仅需在运行时添加一个装饰器对象即可实现,可以实现最大的灵活性

#方法1 传统的继承方式
```
/**
 * 画一个正方形,并且要求是红色的
 * 传统的实现方法是,通过继承的方式来实现如下例
 */
class Canvas2 extends IMooc\Canvas{
    function draw(){
        echo "<div style='color:red'>";
        parent::draw();
        echo "</div>";
    }
}
$canvas1 =  new  Canvas2();
$canvas1->init();
$canvas1->rect(3,6,4,12);
$canvas1->draw();
```
#方法2 使用 装饰者模式 

```
$canvas1 =  new  \IMooc\Canvas();
$canvas1->init();
$canvas1->addDecorator(new \IMooc\DecoratorDrawColor('green'));
$canvas1->addDecorator(new \IMooc\DecoratorDrawSize('20px'));
$canvas1->rect(3,6,4,12);
$canvas1->draw();
```