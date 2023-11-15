<?php

// session starts
session_start();

// config file
require_once 'config.php';

// include helper
require_once 'lib/Helper.php';

// autoloader
function customAutoloader($classname)
{
    require_once 'lib/' . $classname . '.php';
}

spl_autoload_register('customAutoloader');