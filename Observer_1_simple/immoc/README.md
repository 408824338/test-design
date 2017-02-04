#策划模式
1.观察者模式(Observer),当一个对象状态发生改变时,依赖它的对象全部会收到通知,并自动更新
 
2.场景:一个事件发生后,要执行一连串更新操作.传统的编辑方式,就是在事件的代码之后直接加入处理逻辑.当更新的逻辑增多之后
 ,代码会变得难以维护.这种方式是耦合的,侵入式的,增加新的逻辑需要修改事件主体的代码
 
3.观察者模式实现了低耦合,非侵入式的通知与更新机制

###传统的使用
```
class Event{
    function trigger(){
        echo "Event<br />";

        //update
        echo "逻辑1<br />";
        echo "逻辑2<br />";
        echo "逻辑3<br />";
    }
}

$event =  new Event();
$event ->trigger();

//输出 
Event
逻辑1
逻辑2
逻辑3


```
###策划模式的使用
```
class Event extends \IMooc\EventGenerator {
    function trigger(){
        echo "Event<br />";
        $this->notify();
    }
}

class Observer1 implements \IMooc\Observer{
    function update($event_info = null) {
       echo "逻辑1<br />";
    }
}

class Observer2 implements \IMooc\Observer{
    function update($event_info = null) {
       echo "逻辑2<br />";
    }
}

$event =  new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event ->trigger();

//输出 
Event
逻辑1
逻辑2
```
