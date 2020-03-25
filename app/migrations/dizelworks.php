<?php


use Illuminate\Database\Capsule\Manager as Capsule;


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


Capsule::schema()->create('dizelworks', function ($table) {
    $table->increments('id');
    $table->string('start');
    $table->string('stop');
    $table->string('dizname');
    $table->string('zapusk');
    
});