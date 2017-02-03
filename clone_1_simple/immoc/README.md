# 原型模式  clone原型对象

1.与工厂模式作用类似,都是用来创建对象

2.与工厂模式的实现不同,原型模式是先创建好一个原型对象,然后通过clone原型对象来创建新的对象.这样就就免去了类创建时重复的实现初始化操作

3.原型模式适用于大对象的创建.创建一个大对象需要很大的开销,如果每次new就会消耗很大,原型模式仅需内存拷贝即可


方法1,实例化两个,画两个正方形
```
//1.画一个正方形
$canvas1 =  new  \IMooc\Canvas();
$canvas1->init();
$canvas1->rect(3,6,4,12);
$canvas1->draw();


//2.画第二个正方形
$canvas2 = new IMooc\Canvas();
$canvas2->init();
$canvas2->rect(3,6,4,12);
$canvas2->draw();
```

方法2,使用clone原型对象
```
//使用clone原型
$prototype =  new  \IMooc\Canvas();
$prototype->init();

$canvas1 = clone $prototype;
$canvas1->rect(3,6,4,12);
$canvas1->draw();

echo "====================<br />";

$canvas2 = clone $prototype;
$canvas1->rect(3,6,4,12);
$canvas1->draw();
```
#总结
如果遇到实例化对象,如果要经过复杂的初始化的话,使用clone原型对象,方法最好,省去初始化时间...
