<?php

//requires
require 'vendor/autoload.php';

//zobrazenie errorov
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(-1);

//use namespace
use Medoo\Medoo;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// vytvorenie databazy

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'students',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'port' => '3306'
]);

