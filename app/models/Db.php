<?php
namespace  App\Models;

use Illuminate\Database\Capsule\Manager as Capsule;
// https://www.cloudways.com/blog/eloquent-illuminate-in-php-without-laravel/

$capsule = new Capsule;



$capsule->addConnection([

    "driver" => "mysql",

    "host" =>"127.0.0.1",

    "database" => "engine",

    "username" => "root",

    "password" => ""

]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
