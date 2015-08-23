<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'eloquent',
	'username'  => 'root',
	'password'  => '20772792h',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => '',
	'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();