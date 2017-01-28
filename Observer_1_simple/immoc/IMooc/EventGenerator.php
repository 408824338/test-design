<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/28
 * Time: 20:12
 */

namespace IMooc;


abstract class EventGenerator {
    /**
     * 以数据保存观察者
     * @var array
     */
    private $observers = array();

    /**
     * 添加观察者
     * @param Observer $observer
     * @author cmk
     */
    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    /** 通知
     * @author cmk
     */
    public function notify() {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}