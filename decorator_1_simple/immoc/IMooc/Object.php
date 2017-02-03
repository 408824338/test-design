<?php

namespace IMooc;

class Object{
    protected $temp_array = array();
//   static function test(){
//       echo 'object_test';
//   }

   function  __set($key,$value){
       $this->temp_array[$key] = $value;
   }

   function __get($key)
   {
       return $this->temp_array[$key];
   }

   function __call($name, $arguments)
   {
       var_dump($name,$arguments);  //string(4) "test" array(2) { [0]=> string(5) "hello" [1]=> int(123) }
   }

   static function __callStatic($func,$param){
       var_dump($func,$param);
   }

   function __toString()
   {
     return __CLASS__;
   }

   function __invoke($param)
   {
      var_dump($param);
   }
}