<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        
         'title' => $faker -> word,
        'original_title' => $faker -> sentence,
        'nationality' => $faker -> state,
        'date' => $faker -> date,
        'vote' => $faker -> numberBetween(1, 10),   
    ];   
});
   