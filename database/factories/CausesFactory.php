<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Causes;
use Faker\Generator as Faker;

$factory->define(Causes::class, function (Faker $faker) {
    return [
        'title_ar' => $faker->title,
        'title_en' => $faker->title,
        'disc_ar' => $faker->paragraph,
        'disc_en' => $faker->paragraph,
      
        'cause_data' => $faker->date,

    ];
});
