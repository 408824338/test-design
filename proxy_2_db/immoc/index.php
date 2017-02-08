<?php

define('BASEDIR', __DIR__);
define('CONFIG', BASEDIR . '/configs');
define('TEMPLATE_DIR', BASEDIR . '/templates');
include BASEDIR . '/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');

IMooc\Application::getInstance(BASEDIR)->dispatch();