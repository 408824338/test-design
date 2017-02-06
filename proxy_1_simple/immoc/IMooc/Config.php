<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/2/6
 * Time: 16:10
 */

namespace IMooc;


class Config  implements  \ArrayAccess {

    protected $path;
    protected $configs = [];
    function __construct($path) {
        //D:\web&database_backup\test\design\proxy_1_simple\immoc\IMooc/configs
        //D:\web&database_backup\test\design\proxy_1_simple\immoc/configs
        //D:\web&database_backup\test\design\proxy_1_simple\immoc/configs
      //  echo $path;exit;

        $this->path = $path;
    }

    function offsetGet($key) {
        if(empty($this->configs[$key])){
            $file_path = $this->path.'/'.$key.'.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    function offsetSet($offset, $value) {
       throw new \Exception("Cannot write config file");
    }

    function offsetExists($key) {
      return isset($this->configs[$key]);
    }

    function offsetUnset($key) {
        unset($this->configs[$key]);
    }


}