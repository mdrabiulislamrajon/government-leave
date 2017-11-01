<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'fa_hu_name' => $faker->name,
        'mother_name' => $faker->name,
        'mobile' => $faker->unique()->phoneNumber,
        'password' => $password ?: $password = ('secret'),
        'div_br_off' => 'Head Office',
        'join_date'  => \Carbon\Carbon::now()->subYear(),
        'remember_token' => str_random(10),
    ];
});
