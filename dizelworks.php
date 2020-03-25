<?php


use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('start');
    $table->string('stop');
    $table->string('dizname');
    $table->string('zapusk');
    

};
