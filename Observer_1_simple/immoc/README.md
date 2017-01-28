#策划模式


```
#传统的使用
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

```
#策划模式的使用

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
