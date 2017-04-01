<?php

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/


$home = getenv('HOME');
//require $home . "/.composer/vendor/autoload.php";

require __DIR__.'/../vendor/autoload.php';


$appName = 'TcpDemoTest';
$rootPath = realpath(__DIR__.'/../');

$app = new \Zan\Framework\Foundation\Application($appName, $rootPath);