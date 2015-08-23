<?php
require 'vendor/autoload.php';
require 'config/db.php';
use \Slim\Slim as Slim;

$app = new Slim();
$app->get("/",function(){
    echo "welcome to slim 2";
});
$app->run();