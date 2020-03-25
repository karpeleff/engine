<?php


use Illuminate\Database\Capsule\Manager as Capsule;





Capsule::schema()->create('benzin', function ($table) {
    $table->increments('id');
    $table->string('date');
    $table->string('admission');
    $table->string('consumtion');
    $table->string('type');
    $table->integer('balance');

    
});