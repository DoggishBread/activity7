<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'course_key' => $faker->unique()->bothify('Rob###'),
        'name' => $faker->sentence(3),
        'cover' => $faker->imageUrl(640, 480, 'technics', true),
        'content' => $faker->paragraph(4),
        'kit_id' => $faker->numberBetween(1, 3),
    ];
});