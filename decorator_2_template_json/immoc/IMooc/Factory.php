<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/17
 * Time: 6:49
 */

namespace IMooc;

class Factory {
    static function createDatabase() {
//        $db = new Database;
        $db = Database::getInstance();
        Register::set('db1', $db); //注册者模式
        return $db;
    }

    static function getUser($id) {
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }

    /**
     * @author cmk
     * @return $db
     */
    static function getDatabase($id = 'master') {
        $key = 'database_' . $id;
        if ($id == 'slave') {
            $slaves = Application::getInstance()->config['database']['slave'];
            $db_conf = $slaves[array_rand($slaves)];
        } else {
            $db_conf = Application::getInstance()->config['database']['master'];
        }
        $db = Register::get($key);
        if (!$db) {
            $db = Database::getInstance($db_conf);
            Register::set($key, $db);
        }

        return $db;
    }

    /**
     * @param $name
     * @author cmk
     * @return bool
     */
    static function getModel($name) {
        $key = 'model_' . $name;
        $model = Register::get($key);
        if (!$model) {
            $class = '\\App\Model\\' . ucwords($name);
            $model = new $class;
            Register::set($key, $model);
        }
        return $model;
    }
}